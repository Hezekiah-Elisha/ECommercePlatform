<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::view('/login', 'auth.login')->name('login');

Route::view("/products/{id}", "product.product")->name("product.show");