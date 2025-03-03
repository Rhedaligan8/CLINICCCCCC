<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TimeController;
use Carbon\Carbon;

Route::get('/',[HomeController::Class,'index']);

Route::get('/home',[HomeController::Class,'redirect']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/add_doctor_view',[AdminController::Class,'addview']);

Route::post('/upload_doctor',[AdminController::Class,'upload']);

Route::post('/appointment',[HomeController::Class,'appointment']);

Route::get('/myappointment',[HomeController::Class,'myappointment']);

Route::get('/cancel_appoint/{id}',[HomeController::Class,'cancel_appoint']);

Route::get('/showappointment',[AdminController::Class,'showappointment']);

Route::get('/approved/{id}',[AdminController::Class,'approved']);

Route::get('/canceled/{id}',[AdminController::Class,'canceled']);

Route::get('/showdoctor',[AdminController::Class,'showdoctor']);

Route::get('/removedoctor/{id}',[AdminController::Class,'removedoctor']);

Route::get('/view-message/{id}', [AdminController::class, 'viewMessage']);

Route::get('/get-current-time', function () {
    return response()->json([
        'currentTime' => Carbon::now('Asia/Manila')->format('F j, Y h:i:s A')
    ]);
});