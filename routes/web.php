<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BooksController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('contact-us', function(){
    return view('contactUs');
})->name('contact-us');

Route::get('about-us',function(){
    return view('aboutUs');
})->name('about-us');


Route::middleware('auth')->group(function () {
    
    //--------------------------------- User Profile---------------------------------------
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //--------------------------------------------------------------------------------------
    
    
    //-------------------------------Inbox for the books-------------------------------------
    Route::get('my-inbox',function(){
        return view('myInbox');
    })->name('my-inbox');
    //---------------------------------------------------------------------------------------
    
    
    //------------------------------------ My books ------------------------------------------
    Route::get('my-books',[BooksController::class, 'myBooks'])->name('my-books');
    Route::post('my-books/ajax',[BooksController::class, 'myBooksAjax']);
    Route::get('view-books/{id}',[BooksController::class, 'viewBooks'])->name('view-books');
    Route::get('add-books', [BooksController::class, 'addBooks'])->name('add-books');
    Route::post('store-books', [BooksController::class, 'storeBooks'])->name('store-books');
    //-----------------------------------------------------------------------------------------
    
    //------------------------------------Find my books----------------------------------------
    Route::get('find-books',function(){
        return view('findBooks');
    })->name('find-book');
    // ----------------------------------------------------------------------------------------

});

require __DIR__.'/auth.php';
