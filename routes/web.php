<?php

use Illuminate\Support\Facades\Route;
//use Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('markAsRead', function(){
    auth()->user()->unreadNotifications->markAsRead();
    return redirect()->back();
})->name('markAsRead');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('users', App\Http\Controllers\User\UserController::class);

Route::resource('lost_documents', App\Http\Controllers\User\LostDocumentController::class);
Route::resource('found_documents', App\Http\Controllers\User\FoundDocumentController::class);
Route::resource('profiles', App\Http\Controllers\ProfileController::class);

//admin


Route::get('/hom', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin.index');


Route::resource('lost-documents', App\Http\Controllers\Admin\LostDocumentController::class);
Route::resource('found-documents', App\Http\Controllers\Admin\FoundDocumentController::class);