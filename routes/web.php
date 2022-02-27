<?php

use App\Http\Controllers\EstsharatController;
use App\Http\Controllers\HiringController;
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
})->name('index');

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
})->name('request');
Route::get('/hire', function () {
    return view('pages.hire');
})->name('hire');
Route::get('/company-open', function () {
    return view('pages.case-details');
})->name('company-open');
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
Route::get('/h6', function () {
    return view('pages.faq');
});

Route::get('/services', function () {
    return view('pages.services');
});
Route::get('_modal_com_show', function () {
    return view('modals._modal_com_show');
});


// Route::resource('estsharat', EstsharatController::class);
Route::post('estshara', [EstsharatController::class,'store'])->name('estshara');
Route::post('tawzeef', [HiringController::class,'store'])->name('tawzeef');
Route::post('company', [EstsharatController::class,'storeCom'])->name('company');
// Route::post('/upload-file', [EstsharatController::class, 'fileUpload'])->name('fileUpload');