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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/cv', function () {
    return view('pages.attorneys-single');
});

Route::get('/sh', function () {
    return view('pages.attorneys');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/request', function () {
    return view('pages.request');
});
Route::get('/hire', function () {
    return view('pages.hire');
});
Route::get('/company-open', function () {
    return view('pages.case-details');
});
Route::get('/h2', function () {
    return view('pages.case-results');
});
Route::get('/h3', function () {
    return view('pages.contact');
});
Route::get('/h4', function () {
    return view('pages.practice-area');
});
Route::get('/h5', function () {
    return view('pages.practice-single');
});