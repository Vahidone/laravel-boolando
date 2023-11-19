<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/man', function () {
    return view('man');
})->name('man');

Route::get('/woman', function () {
    return view('woman');
})->name('woman');

Route::get('/kids', function () {
    return view('kids');
})->name('kids');


Route::get('/products', function () {

    $products = config('products');

    return view('products', compact('products'));
})->name('products');
