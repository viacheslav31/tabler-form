<?php

use Illuminate\Support\Facades\Route;
use Tabler\TablerForm\Http\Controllers\PostController;


Route::get('/app/form', function () {
    return view('tabler-form::index');
});
Route::get('/app/form',[PostController::class,'index']);
