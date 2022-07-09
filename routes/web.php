<?php

use App\Http\Controllers\PdfController;
use App\Http\Controllers\PdfControllerNew;
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

Route::get('pdf', [PdfController::class, 'generatePdf'])->name('generate-pdf');

Route::get('pdf-2', [PdfControllerNew::class, 'generatePdfNew'])->name('generate-pdf-new');