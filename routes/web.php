<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('front.index');
});


Route::get('/admin',function(){
    return view('back.index');
});

Route::get('/login',function(){
    return view('back.pages.login');
});