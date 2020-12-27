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
	// return view('uptodocument.pdf');
	// return view('uptodocument.create2');
    return view('welcome');//welcome
});

Route::get('/time', function () {
    return view('documentscreate.timecreate');
});

Auth::routes();

// Route::middleware('can:req')->group(function () {
//     Route::put('/requests/{id}/move','RequestDocController@move');
//     Route::get('/requests/{type}/{document}/edit','RequestDocController@edit');
//     Route::get('/requests/{type}/create','RequestDocController@create');
//     Route::post('/requests/{type}','RequestDocController@store');
//     Route::get('/requests/{type}/{document}','RequestDocController@show');
//     Route::put('/requests/{document}/{type}','RequestDocController@update');
//     Route::delete('/requests/{document}','RequestDocController@destroy');
//     Route::get('/request/{type}/print/{id}','RequestDocController@print');
// });
// Route::middleware('can:doc')->group(function () {

// });

// Route::get('/home', 'HomeController@index')->name('home');

Route::put('/requests/{id}/move','RequestDocController@move');
Route::put('/documents/{document}/move','DocumentsController@move');


Route::get('/documents','DocumentsController@index')->name('home');
Route::get('/requests','RequestDocController@index')->name('requesthome');


Route::get('/documents/{type}/{document}/edit','DocumentsController@edit');
Route::get('/requests/{type}/{document}/edit','RequestDocController@edit');


Route::get('/documents/{type}/create','DocumentsController@create');
Route::get('/requests/{type}/create','RequestDocController@create');


Route::post('/documents/{type}','DocumentsController@store');
Route::post('/requests/{type}','RequestDocController@store');


// Route::get('/documents/{document}','DocumentsController@show');

Route::get('/documents/{type}/{document}','DocumentsController@show');
Route::get('/requests/{type}/{document}','RequestDocController@show');


Route::put('/documents/{document}/{type}','DocumentsController@update');
Route::put('/requests/{document}/{type}','RequestDocController@update');


Route::delete('/documents/{document}','DocumentsController@destroy');
Route::delete('/requests/{document}','RequestDocController@destroy');


Route::put('/document/{id}/move','DocumentsController@move');



Route::get('/document/{type}/print/{id}','DocumentsController@print');
Route::get('/request/{type}/print/{id}','RequestDocController@print');


Route::get('/request/{type}/pdf/{id}','RequestDocController@pdf');



Route::get('/document/{type}/pdf/{id}','DocumentsController@pdf');


