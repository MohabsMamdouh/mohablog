<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

Route::controller(App\Http\Controllers\UserHomeController::class)->group(function ()
{
    Route::get('/', 'index')->name('portfolio');
    Route::get('/downloadPDF','downloadPDF')->name('downloadPDF');
    Route::get('/view','pdfview')->name('dd');
});

Auth::routes();
