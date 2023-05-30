<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\MultistepPoc;

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
    return view('dup');
})->middleware(['auth', 'verified']);

Auth::routes();

Route::get('/home', 
   function(){
    return view('dup');
})->middleware(['auth', 'verified']);


Route::get('/dashboard', function () {
    return view('dup');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/markets', function () {
    return view('markets');
})->middleware(['auth', 'verified'])->name('markets');


Route::get('/collectors', function () {
    return view('collectors');
})->middleware(['auth', 'verified'])->name('collectors');


Route::get('/edit-product', function () {
    return view('product-edit');
})->middleware(['auth', 'verified'])->name('product-edit');

Route::get('/duplicate', function () {
    return view('duplicate');
})->middleware(['auth', 'verified'])->name('duplicate');


Route::get('/product-details', function () {
    return view('nk1/product-list');
})->middleware(['auth', 'verified'])->name('product-details');


Route::get('/orders-list', function () {
    return view('nk1/orders');
})->middleware(['auth', 'verified'])->name('orders');



Route::get('/dup', function(){
    return view('dup');
})->middleware(['auth', 'verified'])->name('dup');



Route::get('/index', function(){
    return view('nk1/index');
})->middleware(['auth', 'verified'])->name('index');

Route::get('/duppp', function(){
    return view('dupppp');
})->middleware(['auth', 'verified'])->name('duppp');


Route::get('/orders', function(){
    return view('orders');
})->middleware(['auth', 'verified'])->name('orders');

Route::get('/dupp', function(){
    return view('dupp');
})->middleware(['auth', 'verified'])->name('dupp');

Route::get('/records', function () {
    return view('records');
})->middleware(['auth', 'verified'])->name('records');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

// require __DIR__.'/auth.php';

