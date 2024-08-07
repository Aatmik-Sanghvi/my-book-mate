<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;
use App\Models\BookImages;
use Illuminate\Support\Facades\Auth;

class BooksController extends Controller
{
    //Index Page
    public function myBooks(){
        return view('myBooks.indexBooks');
    }

    // Ajax function for listing
    public function myBooksAjax(Request $request){
        $columns = array('id','title','author','isbn');
        
        $limit = $request->input('length');
        $start = $request->input('start');
        $order = "id";
        $dir = "asc";

        if($request->input('order.0.column') != "" && $request->input('order.0.dir') != "")
        {
            $order = $columns[$request->input('order.0.column')];
            $dir = $request->input('order.0.dir');
        }

        $books = Books::where('user_id',Auth::user()->id);

        if(isset($request->search['value'])){
            $search = $request->search['value'];
            $books = $books->where(function ($query) use ($search){
                $query->where('id','LIKE',"%{$search}%")
                    ->orWhere('title','LIKE',"%{$search}%")
                    ->orWhere('authors','LIKE',"%{$search}%")
                    ->orWhere('isbn','LIKE',"%{$search}%");
            });
        }

        $total_data = $books->count();
        $total_filter = $total_data;

        $books = $books->offset($start)->limit($limit)->orderBy($order,$dir)->get();

        $data = array();

        if(!empty($books)){
            foreach($books as $item){
                $nestedData['id'] = $item->id;
                $nestedData['title'] = $item->title;
                $nestedData['authors'] = $item->authors;
                $nestedData['isbn'] = $item->isbn;
                // $nestedData['images'] = $item->
                $action = '<div class="text-center">';
                $action .= '<a href="'.route('view-books', $item->id).'" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>';
                $action .= '</div>';
                $nestedData['action'] = $action;

                $data[] = $nestedData;
            }
        }

        $json_data = array(
            "draw" => intval($request->input('draw')),
            "recordsTotal" => intval($total_data),
            "recordsFiltered" => intval($total_filter),
            "data" => $data
        );

        return json_encode($json_data);
    }

    // View book page
    public function viewBooks($id){
        $viewBookPage = Books::find($id);
        return view('myBooks.viewBooks',compact('viewBookPage'));
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
            'book_images.*'=>'image|mimes:jpeg,jpg,png|max:2048'
        ],[
            'book_images.*'=>'Image type or size is too large'
        ]);

        $user = Auth::user();
        $storeBooks = Books::updateOrCreate([
            'user_id'=>$user->id,
            'title'=>$request->title,
            'authors'=>$request->authors,
            'isbn'=>$request->isbn
        ]);

        if($request->hasFile('book_images')){
            foreach($request->file('book_images') as $file){
                $imageName = time().'.'.$file->extension();
                $file->move(public_path('bookImages'),$imageName);
                \Log::info($imageName);
                $addImageToDb = BookImages::create([
                    'books_id'=>$storeBooks->id,
                    'image_path'=>'bookImages/'.$imageName
                ]);
            }
        }

        return redirect()->route('my-books')->with(['success'=>'Book added successfully.']);
    }
}
