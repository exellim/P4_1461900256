<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bukuc;
use App\Exports\ExportData;

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

Route::resource('/buku0256', 'App\Http\Controllers\bukuc');
Route::get('buku0256/{id}', [ 'as' => 'buku0256.edit', 'uses' => 'App\Http\Controllers\bukuc@edit']);
Route::post('buku0256/update/{id}', [ 'as' => 'buku0256.update', 'uses' => 'App\Http\Controllers\bukuc@update']);
//Route::get('/buku0256/export_excel', 'App\Http\Controllers\bukuc@export_excel');
Route::post('buku0256/export_excel', [ 'as' => 'buku0256.export_excel', 'uses' => 'App\Http\Controllers\bukuc@export_excel']);
Route::post('buku0256/delete/{id}', [ 'as' => 'buku0256.destroy', 'uses' => 'App\Http\Controllers\bukuc@destroy']);
Route::get('/bukuc/export_excel', 'App\Http\Controllers\bukuc@export_excel');





