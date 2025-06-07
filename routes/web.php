<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('list');
})->name('home');

Route::get('/task', function () {
    return view('show-task');
})->name('show.task');
