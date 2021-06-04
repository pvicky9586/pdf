<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\ComponentPdf;

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



Route::get('/livewire-pdf', function () {
    return view('livewire.conponent-pdf');
});



Route::get('/upload', 'App\Http\Controllers\PdfController@upload')->name('upload');
Route::post('/upload', 'App\Http\Controllers\PdfController@guardar')->name('guardar');
// Route::get('/form', [App\Http\Controller\PdfController::class,'subirpdf'])->name('subirpdf');
//Route::post('/guardar', [App\Http\Controller\PdfController::class,'gurdar'])->name('guardar');
Route::get('/download', 'App\Http\Controllers\PdfController@download')->name('download');







Route::get('/pdfBD',[ComponentPdf::class,'pdfbd']);

Route::get('/downloadpdf',[ComponentPdf::class,'downloadpdf']);
