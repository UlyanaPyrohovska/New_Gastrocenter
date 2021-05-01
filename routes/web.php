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
    return view('landing');
});
Route::get('/about_us', function () {
    return view('about_us');
});
Route::get('/doctors', function () {
    return view('doctors');
});
Route::get('/thanks', function () {
    return view('thanks');
})->name("thanks");

Route::get('/search/submit', 'App\Http\Controllers\SearchController@submit')->name("search_form");

Route::post('/ask_submit', 'App\Http\Controllers\AskFormController@submit')->name("ask_form");
