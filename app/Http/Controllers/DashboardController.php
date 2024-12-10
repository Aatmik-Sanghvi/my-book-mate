<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function dashboard() {
        return view('dashboard');
    }

    public function dashboardChart(){
        $user_id = Auth::user()->id;
        $booksBorrowed = Books::all()->count();
        $myBooks = Books::where('id',$user_id)->count();

        return response()->json([$booksBorrowed, $myBooks]);
    }
}
