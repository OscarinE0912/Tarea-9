<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('home'))->name('home');
Route::get('/fotos', fn() => view('fotos'))->name('fotos');
Route::get('/contacto', fn() => view('contacto'))->name('contacto');
