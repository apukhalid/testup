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
 
 Route::get('/success', function () {
    return view('success');
});
 
//Route::get('/a', 'Controller@index');  
Route::get('/', 'App\Http\Controllers\PagesController@index');  


Route::get('/viewall', 'App\Http\Controllers\Viewall@index');  
Route::post('/uploadFile', 'App\Http\Controllers\PagesController@uploadFile');
