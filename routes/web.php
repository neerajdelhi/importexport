<?php

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

Route::get('/', 'CsvController@index');
Route::get('/export','CsvController@export')->name('export');
Route::post('/import','CsvController@import')->name('import');


Route::get('/bulk_ledger', 'CsvController@bulk_ledger');
Route::get('/bulk_ledger_export','CsvController@bulk_ledger_export')->name('bulk_ledger_export');
Route::post('/bulk_ledger_import','CsvController@bulk_ledger_import')->name('bulk_ledger_import');