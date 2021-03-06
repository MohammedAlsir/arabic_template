<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\hr;
use Illuminate\Support\Facades\Route;

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
})->name('home');

Route::get('/hr/tawid', function () {
    return view('hr.tawid');
})->name('tawid');

Route::get('hr', function () {
    return view('hr.maash');
})->name('hr');

// Route::get('/hr', function () {
//     return view('hr')->name('hr');
// });

// Route::get('/hr', function () {
//     return view('tawid')->name('tawid.hr');
// });
