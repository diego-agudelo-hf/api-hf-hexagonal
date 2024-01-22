<?php

use Illuminate\Http\Request;
use illuminate\Support\Facades\Route;

Route::get('/', 'WarehouseFindAllController');
Route::get('/{id}', 'WarehouseFindController');
Route::post('/', function () {
    dd('save');
});
Route::put('/', function () {
    dd('update');
});
Route::delete('/', function () {
    dd('delete');
});
