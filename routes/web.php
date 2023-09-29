<?php

use App\Http\Controllers\PendaftaranController;
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
Route::resource('user', PendaftaranController::class);
Route::get('/user/pdf', 'PendaftaranController@generatePDF')->name('user.pdf');
// Edit data
Route::get('/user/{id}/edit', 'PendaftaranController@edit')->name('user.edit');
Route::put('/user/{id}', 'PendaftaranController@update')->name('user.update');

// Hapus data
Route::delete('/user/{id}', 'PendaftaranController@destroy')->name('user.destroy');

// Tambah data
Route::get('/user/create', 'PendaftaranController@create')->name('user.create');
Route::post('/user', 'PendaftaranController@store')->name('user.store');
