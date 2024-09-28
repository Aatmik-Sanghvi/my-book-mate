<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;
use App\Models\BookImages;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Crypt;

// For fetching location based on ip address
// use Stevebauman\Location\Facades\Location;

class BooksController extends Controller
{
    //Index Page
    public function myBooks(Request $request){
        return view('myBooks.indexBooks');
    }

    // Ajax function for listing
    public function myBooksAjax(Request $request){
        $columns = array('id','title','author','isbn');
        // $city = !is_null($request->city) ? $request->city : Auth::user()->city;
        $city = Auth::user()->city;

        $limit = $request->input('length');
        $start = $request->input('start');
        $order = "id";
        $dir = "asc";

        if($request->input('order.0.column') != "" && $request->input('order.0.dir') != "")
        {
            $order = $columns[$request->input('order.0.column')];
            $dir = $request->input('order.0.dir');
        }

        $books;
        // IF condition is for getting all the books user have added.
        if($request->page == 'my-books'){
            $books = Books::where('user_id',Auth::user()->id);
        }
        // else condition is for getting the list of books that are present in the user city.
        else if($request->page == 'borrowed-books'){
            $books = Books::where('user_id','!=',Auth::user()->id)->whereHas('user', function($query) use ($city){
                $query->where('city',$city);
            });
            \Log::info($request->category);
        }

        $isAnyBookPresent = $books->count();
        if(isset($request->search['value']) || isset($request->category)){
            $search = $request->search['value'] ? $request->search['value'] : $request->category;
            $books = $books->where(function ($query) use ($search){
                $query
                    ->where('title','LIKE',"%{$search}%")
                    ->orWhere('authors','LIKE',"%{$search}%")
                    ->orWhere('isbn','LIKE',"%{$search}%")
                    ->orwhere('category','LIKE',"%{$search}%");
            });
        }

        $total_data = $books->count();
        $total_filter = $total_data;

        $books = $books->offset($start)->limit($limit)->orderBy($order,$dir)->get();

        $data = array();

        if(!empty($books)){
            foreach($books as $item){
                // $nestedData['id'] = $item->id;
                $nestedData['title'] = $item->title;
                $nestedData['authors'] = $item->authors;
                $nestedData['isbn'] = $item->isbn ?? 'NA';
                $nestedData['category'] = ucfirst($item->category) ?? 'NA';
                $nestedData['images'] = isset($item->image) ? '<img src="'.asset($item->image).'" alt="book_image" width="100px" height="100px">' : 'No image available';
                $action = '<div class="text-center">';
                if($request->page == 'borrowed-books'){
                    $action .= '<a href="'.route('borrow-books', Crypt::encrypt($item->id)).'" class="btn btn-primary"><img src="'.asset('assets/images/booking.png').'" alt="book-id" width="20px" height="20px"></a>';
                }
                if($request->page == 'my-books'){
                    $action .= '<a href="'.route('view-books', Crypt::encrypt($item->id)).'" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>';
                }
                // $action .= '<a href="'.route('edit-books', Crypt::encrypt($item->id)).'" class="btn btn-primary"><i class="fa-solid fa-pen"></i></a>';
                $action .= '</div>';
                $nestedData['action'] = $action;

                $data[] = $nestedData;
            }
        }

        $json_data = array(
            "draw" => intval($request->input('draw')),
            "recordsTotal" => intval($total_data),
            "isAnyBookPresent" => $isAnyBookPresent,
            "recordsFiltered" => intval($total_filter),
            "data" => $data
        );

        return json_encode($json_data);
    }

    // View book page
    public function viewBooks($id){
        $book = Books::find(Crypt::decrypt($id));
        return view('myBooks.viewBooks',compact('book'));
    }

    // Edit book page
    public function editBooks($id){
        $book = Books::find(Crypt::decrypt($id));
        return view('myBooks.editBooks',compact('book'));
    }

    // Update book page
    public function updateBooks(Request $request, $id){
        $request->validate([
            'title'=>'required',
            'authors'=>'required',
            'book_image'=>'image|mimes:jpeg,jpg,png|max:2048'
        ],[
            'book_image'=>'Image type or size is too large'
        ]);

        $user = Auth::user();
        $id = Crypt::decrypt($id);
        $storeBooks = Books::find($id)->update([
            'user_id'=>$user->id,
            'title'=>$request->title,
            'authors'=>$request->authors,
            'isbn'=>$request->isbn 
        ]);

        if($request->hasFile('book_image')){
            // $findImageToDb = BookImages::where('books_id',$id)->first();
        
        //     foreach($findImageToDb as $image){
                // if(file_exists(public_path('bookImages/' . $findImageToDb->image_path))){
                //     unlink(public_path('bookImages/' . $findImageToDb->image_path));
                // }
        //     }
            // BookImages::where('books_id', $id)->delete();
            // foreach($request->file('book_images') as $file){
                $imageName = time().'.'.$request->file('book_image')->extension();
                $request->file('book_image')->move(public_path('bookImages'),$imageName);
                \Log::info($imageName);
                $updatingImageToDb = BookImages::create([
                    'books_id'=>$id,
                    'image_path'=>'bookImages/'.$imageName
                ]);
            // }
        }
        return redirect()->route('view-books',['id'=>Crypt::encrypt($id)])->with(['success'=>'Books details updated successfully.']);
    }
    
    // Add book page
    public function addBooks(){
        return view('myBooks.addBooks');
    }

    // Store Books page
    public function storeBooks(Request $request){
        $request->validate([
            'title'=>'required',
            'authors'=>'required',
        ]);

        $user = Auth::user();
        $storeBooks = Books::updateOrCreate([
            'user_id'=>$user->id,
            'title'=>$request->title,
            'authors'=>$request->authors,
            'category'=>strtolower($request->category),
            'isbn'=>$request->isbn,
            'image'=>$request->book_image
        ]);

        // if($request->hasFile('book_image_src')){
            // foreach($request->file('book_images') as $file){
                // $imageName = time().'.'.$request->file('book_image_src')->extension();
                // $request->file('book_image_src')->move(public_path('bookImages'),$imageName);
                // \Log::info($imageName);
                // $addImageToDb = BookImages::create([
                //     'books_id'=>$storeBooks->id,
                //     'image_path'=>'bookImages/'.$imageName
                // ]);
            // }
        // }

        return redirect()->route('my-books')->with(['success'=>'Books added successfully.']);
    }

    public function deleteImage($id){
        $id = Crypt::decrypt($id);
        $findImageToDb = BookImages::where('books_id',$id)->first();
        if(file_exists(public_path('bookImages/' . $findImageToDb->image_path))){
            unlink(public_path('bookImages/' . $findImageToDb->image_path));
        }
        BookImages::where('books_id', $id)->delete();
        return redirect()->back();
    }
}
