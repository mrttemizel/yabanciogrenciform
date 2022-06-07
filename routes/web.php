<?php


use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

//Front End Routes
Route::get('/', function () {
    return view('front.index');
});






//Back End Routes


Route::get('/login',[\App\Http\Controllers\Back\LoginController::class,'loginPage'])->name('loginPage')->middleware('guest');
Route::post('/loginController',[\App\Http\Controllers\Back\LoginController::class,'login'])->name('login')->middleware('guest');
Route::get('/logout',[\App\Http\Controllers\Back\LoginController::class,'logout'])->name('logout')->middleware('auth');





Route::middleware('auth')->group(function(){

    Route::get('/admin/home',[\App\Http\Controllers\Back\HomeController::class,'home'])->name('home');


});
