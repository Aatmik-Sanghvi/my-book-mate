<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AllBooksController;
use App\Http\Controllers\AskAIController;
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
})->name('welcome');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('contact-us', function(){
    return view('contactUs');
})->name('contact-us');

Route::get('about-us',function(){
    return view('aboutUs');
})->name('about-us');


Route::middleware('auth')->group(function () {
    
    Route::middleware('profileSetupRequired')->group(function () { 
        // -------------------------------- Dashboard -----------------------------------------
        Route::get('dashboard',[DashboardController::class, 'dashboard'])->name('dashboard');
        Route::post('dashboard/chart',[DashboardController::class, 'dashboardChart'])->name('dashboard-chart');
        //-----------------------------------------------------------------------------------------

        // -------------------------------- Ask AI ----------------------------------------------
        Route::get('ask-ai',[AskAIController::class, 'getAskAI'])->name('ask-ai');
        Route::post('ask-ai',[AskAIController::class, 'postAskAi']);
        // --------------------------------------------------------------------------------------

        //------------------------------------ My books ------------------------------------------
        Route::get('my-books',[BooksController::class, 'myBooks'])->name('my-books');
        Route::post('my-books/ajax',[BooksController::class, 'myBooksAjax']);
        Route::get('view-books/{id}',[BooksController::class, 'viewBooks'])->name('view-books');
        Route::get('edit-books/{id}',[BooksController::class, 'editBooks'])->name('edit-books');
        Route::get('deleteImage/{id}',[BooksController::class, 'deleteImage'])->name('deleteImage');
        Route::post('update-books/{id}',[BooksController::class, 'updateBooks'])->name('update-books');
        Route::post('delete-books/{id}',[BooksController::class, 'deleteBooks'])->name('delete-books');
        Route::get('add-books', [BooksController::class, 'addBooks'])->name('add-books');
        Route::post('store-books', [BooksController::class, 'storeBooks'])->name('store-books');
        //-----------------------------------------------------------------------------------------

        // -----------------------------------Borrowed Books---------------------------------------
        Route::get('all-books',[AllBooksController::class, 'allBooks'])->name('all-books');
        Route::get('borrow-books/{id}',[AllBooksController::class, 'requestBooks'])->name('borrow-books');
        Route::post('borrow-books/request-message',[AllBooksController::class, 'requestMessage'])->name('request-message');
        // ----------------------------------------------------------------------------------------
    });

    //--------------------------------- User Profile---------------------------------------
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //--------------------------------------------------------------------------------------

    //------------------------------------Find my books----------------------------------------
    // Route::get('find-books',function(){
    //     return view('findBooks');
    // })->name('find-book');
    // ----------------------------------------------------------------------------------------
});

require __DIR__.'/auth.php';
