<?php

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
    return view('pages.index');
});

Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/messages', function () {
    return view('pages.messages');
});
Route::get('/signup', function () {
    return view('pages.signup');
});
Route::get('/login', function () {
    return view('pages.login');
});
Route::get('/messagedata', function () {
    return view('pages.messagedata');
});


Route::post('/contact', function () {
    $data =request()->all();
    echo "Email: ". $data['email'] . '<br>';
    echo "Message: ". $data ['body'];
});