<?php

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
});
Route::get('/newPensions', function () {
    
    return view('pensions.newPensions');
});
Route::get('/inProcessingPensions', function () {
    
    return view('pensions.inProcessing');
});
Route::get('/inProcessingPensionsshow', function () {
    
    return view('pensions.inProcessingShow');
});
Route::get('/rejectedPensions', function () {
    
    return view('pensions.rejected');
});
Route::get('/show', function () {
    
    return view('pensions.show');
});
Route::get('/newCompensation', function () {
    
    return view('compensation.newCompensation');
    
});
Route::get('/inProcessingCompensation', function () {
    
    return view('compensation.inProcessing');
    
});
Route::get('/inProcessingCompensationshow', function () {
    
    return view('compensation.inProcessingShow');
    
});


Route::get('/rejectedCompensation', function () {
    
    return view('compensation.rejected');
    
});
Route::get('/Compensation/show', function () {
    
    return view('compensation.show');

});
