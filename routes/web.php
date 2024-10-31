<?php


use App\Http\Controllers\BiodataController;
use App\Http\Controllers\JalurController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Ini adalah route tanpa MVC
Route::get('/jalurbaru', function(){
    return 'Ini Jalan Baru Tanpa MVC';
});


// Ini adalah route menggunakan view 
Route::get('/jalurview', function(){
    return view('viewjalur');
});

// ini adalah route menggunakan view & controller
Route::get('/jalurcontroller', [JalurController::class, 'index']);


// ini adalah route menggunakan view, controller & model
Route::get('/jalurmodel', [JalurController::class, 'menampilkanDataModel']);

// ini adalah route menggunakan view, controller & model
Route::get('/biodata', [BiodataController::class, 'menampilkanBiodata']);