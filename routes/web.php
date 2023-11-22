<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\RecordsController;
use App\Http\Controllers\AppointmentController;

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
Route::get('/appointment/index', [AppointmentController::class, 'index'])->name('appointments.index'); //show appointment Index
// Route::get('/appointments', [AppointmentController::class, 'index'])->name('appointments.index'); //show appointment Index
Route::get('/appointment', [AppointmentController::class, 'create'])->name('appointments.create-mon'); //show apppoinment Form
Route::post('/appointment', [AppointmentController::class, 'store']);
Route::get('/appointment/index', [AppointmentController::class, 'display']);


// ----------------------------------
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
Route::get('/blogs/create', [BlogController::class, 'create'])->name('blogs.create');
Route::post('/blogs', [BlogController::class, 'store'])->name('blogs.store');

// Admin Authentication Routes

Route::prefix('admin')->group(function () {
    Route::get('login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('login', [AdminAuthController::class, 'login']);
    Route::get('register', [AdminAuthController::class, 'showRegistrationForm'])->name('admin.register');
    Route::post('register', [AdminAuthController::class, 'register']);
    Route::post('logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
});
// ----------------------------------------------------------------
Route::get('/', function () {
    return view('home');
});

Route::get('/services' , function () {
    return view('services');
});
Route::get('/events' , function () {
    return view('events' );
});

Route::get('/events', [EventsController::class,'passEvent']);

Route::get('/blogs' , function () {
    return view('blogs');
});
Route::get('/aboutUs' , function () {
    return view('aboutUs');
});
// Route::get('/login' , function () {
//     return view('login');
// });


Route::get('/admin/adminDashboard', [RecordsController::class,'adminDashboard']);

Route::get('/admin/adminAddRecords', [RecordsController::class, 'adminAddRecords']); //Show Form

Route::post('/admin', [RecordsController::class, 'storeRecords']); //Store Data

Route::get('/admin/adminRecords', [RecordsController::class,'adminRecords']);

Route::get('/admin/adminCreateBlog', [RecordsController::class,'adminCreateBlog']);

Route::get('/admin/{record}/adminEditRecords', [RecordsController::class, 'adminEditRecords']); //show Edit From

Route::put('/admin/{record}', [RecordsController::class, 'adminUpdateRecord']); //Update Form

Route::delete('/admin/{record}',[RecordsController::class, 'destroy']);

Route::get('/admin/{record}', [RecordsController::class,'adminRecordView']);//show each Records put sa last




// Route::get('/admin/{event}', [EventsController::class,'destroy']);



Route::get('/event/adminEvents', [EventsController::class,'adminEvents']); // ------------show EVENTSSS page 

Route::get('/event/adminAddEvent', [EventsController::class,'adminEventsForm']); //show add Event form

Route::post('/event' , [EventsController::class,'createEvent']); //Store Event

Route::get('/event/{event}/adminEditEvent', [EventsController::class,'adminEditEvents']); // ----EDIT  EVENTSSS landing PAge_____

Route::put('/event/{event}', [EventsController::class,'adminUpdateEvents']); // ----EDIT  EVENTSSS landing PAge_____

Route::delete('/event/{event}',[EventsController::class, 'destroy']); // ----Delete  EVENTSSS landing PAge_____

// Route::get('/admin/adminEvents', [RecordsController::class,'adminEvents']);


// Route::post('/admin/adminEvents' , [EventsController::class,'postEvent']); //post Event



// Route::get('admin/adminRecordView', [RecordsController::class,'adminRecordView']); 

// Route::get('/admin/adminRecordView/{id}', [RecordsController::class,'adminRecordView']);//originalshow each Records


