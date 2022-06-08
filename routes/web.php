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


    //Settings Crud
    Route::get('/admin/settings/index',[\App\Http\Controllers\Back\SettingsController::class,'index'])->name('settings.index');
    Route::post('/admin/settings/update',[\App\Http\Controllers\Back\SettingsController::class,'update'])->name('settings.update');


    //Services Crud
    Route::get('/admin/services/index',[\App\Http\Controllers\Back\ServicesController::class,'index'])->name('services.index');
    Route::get('/admin/services/create',[\App\Http\Controllers\Back\ServicesController::class,'create'])->name('services.create');
    Route::post('/admin/services/store',[\App\Http\Controllers\Back\ServicesController::class,'store'])->name('services.store');
    Route::get('/admin/services/edit{id}',[\App\Http\Controllers\Back\ServicesController::class,'edit'])->name('services.edit');
    Route::post('/admin/services/update',[\App\Http\Controllers\Back\ServicesController::class,'update'])->name('services.update');
    Route::get('/admin/services/delete{id}',[\App\Http\Controllers\Back\ServicesController::class,'delete'])->name('services.delete');

    //Services Categori Crud
    Route::get('/admin/servicesCategori/index',[\App\Http\Controllers\Back\ServicesCategoryController::class,'index'])->name('servicesCategori.index');
    Route::get('/admin/servicesCategori/create',[\App\Http\Controllers\Back\ServicesCategoryController::class,'create'])->name('servicesCategori.create');
    Route::post('/admin/servicesCategori/store',[\App\Http\Controllers\Back\ServicesCategoryController::class,'store'])->name('servicesCategori.store');
    Route::get('/admin/servicesCategori/edit{id}',[\App\Http\Controllers\Back\ServicesCategoryController::class,'edit'])->name('servicesCategori.edit');
    Route::post('/admin/servicesCategori/update',[\App\Http\Controllers\Back\ServicesCategoryController::class,'update'])->name('servicesCategori.update');
    Route::get('/admin/servicesCategori/delete{id}',[\App\Http\Controllers\Back\ServicesCategoryController::class,'delete'])->name('servicesCategori.delete');

    //Slider Crud
    Route::get('/admin/slider/index',[\App\Http\Controllers\Back\SliderController::class,'index'])->name('slider.index');
    Route::get('/admin/slider/create',[\App\Http\Controllers\Back\SliderController::class,'create'])->name('slider.create');
    Route::post('/admin/slider/store',[\App\Http\Controllers\Back\SliderController::class,'store'])->name('slider.store');
    Route::get('/admin/slider/edit{id}',[\App\Http\Controllers\Back\SliderController::class,'edit'])->name('slider.edit');
    Route::post('/admin/slider/update',[\App\Http\Controllers\Back\SliderController::class,'update'])->name('slider.update');
    Route::get('/admin/slider/delete{id}',[\App\Http\Controllers\Back\SliderController::class,'delete'])->name('slider.delete');

    //User Crud
    Route::get('/admin/user/index',[\App\Http\Controllers\Back\UserController::class,'index'])->name('user.index');
    Route::post('/admin/user/editpassword',[\App\Http\Controllers\Back\UserController::class,'editpassword'])->name('user.editpassword');
    Route::post('/admin/user/profilupdate',[\App\Http\Controllers\Back\UserController::class,'profilupdate'])->name('user.profilupdate');



});
