<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;
use App\Models\BorrowedBookHistory;
use Illuminate\Support\Facades\Auth;
use Mail;
use App\Mail\RequestBookMail;
use Illuminate\Support\Facades\Crypt;


class BorrorwedBooksController extends Controller
{
    //
    public function allBooks(){
        return view('borrowedBooks.index');
    }

    public function borrowBooks($id){
        $book = Books::find(Crypt::decrypt($id));
        return view('borrowedBooks.borrowBooks',compact('book'));
    }

    public function requestMessage(Request $request){
        $request->validate([
            'requestMessage'=>['required','regex:/^[a-zA-Z0-9\s.,!?\'"]+$/']
        ]);

        $bookOwnedBy = Books::find($request->book_id)->user;
        $request_to_user_id = $bookOwnedBy->id;
        $request_by_user_id = Auth::user()->id;

        // Send request mail to the books owner
        Mail::to($bookOwnedBy->email)->send(new RequestBookMail($bookOwnedBy,$request->requestMessage));

        // Save borrowed book history
        $borrowBookHistory = BorrowedBookHistory::create([
                'request_to_user_id'=>$request_to_user_id,
                'request_by_user_id'=>$request_by_user_id,
                'request_message'=>$request->requestMessage,
                'book_id'=>$bookOwnedBy->id
            ]
        );

        return redirect()->route('all-books')->with(['success'=>'Request sent successfully.']);
    }
}
