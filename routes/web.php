<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('cursos.index');
})->name('cursos.index');
