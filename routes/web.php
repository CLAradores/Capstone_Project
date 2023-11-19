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
    return view('home');
});


Route::get('/services' , function () {
    return view('services');
});
Route::get('/events' , function () {
    return view('events');
});
Route::get('/blogs' , function () {
    return view('blogs');
});
Route::get('/aboutUs' , function () {
    return view('aboutUs');
});
Route::get('/login' , function () {
    return view('login');
});
Route::get('/adminDashboard' , function () {
    return view('adminDashboard');
});
Route::get('/adminEvents' , function () {
    return view('adminEvents');
});
Route::get('/adminRecords' , function () {
    return view('adminRecords');
});
Route::get('/adminAddRecords' , function () {
    return view('adminAddRecords');
});
Route::get('/adminCreateBlog' , function () {
    return view('adminCreateBlog');
});
Route::get('/adminRecordView' , function () {
    return view('adminRecordView');
});