<?php

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
    $data = [
        'title' => 'Hello on my page',
        'message' => 'Hello you are in',
    ];
    return view('home', $data);
})->name("home");
Route::get('/about', function () {
    $data = [
        'message' => 'Welcome in our website!',
        'about' => 'Do you want to be part of our team?',
    ];
    return view('about', $data);
})->name("about");
Route::get('/contact', function () {

    return view('contact');

})->name("contact");