<?php

use App\Http\Controllers\RecordsController;
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


Route::get('/admin/adminDashboard', [RecordsController::class,'adminDashboard']);

Route::get('/admin/adminAddRecords', [RecordsController::class, 'adminAddRecords']); //Show Form

Route::post('/admin', [RecordsController::class, 'storeRecords']); //Store Data

Route::get('/admin/adminRecords', [RecordsController::class,'adminRecords']);

Route::get('/admin/adminEvents', [RecordsController::class,'adminEvents']);

Route::get('/admin/adminCreateBlog', [RecordsController::class,'adminCreateBlog']);



Route::put('/admin/{record}', [RecordsController::class, 'adminUpdateRecord']); //Update Form

Route::delete('/admin/{record}',[RecordsController::class, 'destroy']);

Route::get('/admin/{record}/adminEditRecords', [RecordsController::class, 'adminEditRecords']); //show Edit From


Route::get('/admin/{record}', [RecordsController::class,'adminRecordView']);//show each Records








// Route::get('admin/adminRecordView', [RecordsController::class,'adminRecordView']); 

// Route::get('/admin/adminRecordView/{id}', [RecordsController::class,'adminRecordView']);//originalshow each Records


