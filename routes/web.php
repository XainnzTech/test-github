<?php

use App\Http\Controllers\BukuController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MencobaController;

// Versi 7
// Route::get('trying', 'MencobaController@boomesport');

// Versi 9
Route::get('/boom', [MencobaController::class, 'boomesport']);
Route::get('/prxesport', [MencobaController::class, 'prxesport']);
Route::get('/fnaticesport', [MencobaController::class, 'fnaticesport']);
Route::get('/fpxesport', [MencobaController::class, 'fpxesport']);
Route::get('/', [MencobaController::class, 'beranda']);

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about', function () {
//     return view('about', [
//         "name" => "lala",
//         "email" => "lala@gmail.com"
//     ]);
// });

Route::get('/buku', [BukuController::class, 'index']);
