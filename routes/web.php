<?php


use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

//Front End Routes
Route::get('/', function () {
    return view('front.index');
});






//Back End Routes


Route::get('/login',[\App\Http\Controllers\Back\LoginController::class,'loginPage'])->name('loginPage');
Route::post('/loginController',[\App\Http\Controllers\Back\LoginController::class,'login'])->name('login');






Route::middleware('auth')->group(function(){

    Route::get('/logout',[\App\Http\Controllers\Back\LoginController::class,'logout'])->name('logout');

    Route::get('/admin/home',[\App\Http\Controllers\Back\HomeController::class,'home'])->name('home');



    //Settings Crud
    Route::get('/admin/settings/index',[\App\Http\Controllers\Back\SettingsController::class,'index'])->name('settings.index');
    Route::post('/admin/settings/update',[\App\Http\Controllers\Back\SettingsController::class,'update'])->name('settings.update');


      //Kurumsal Crud
      Route::get('/admin/kurumsal/index',[\App\Http\Controllers\Back\KurumsalController::class,'index'])->name('kurumsal.index');
      Route::post('/admin/kurumsal/update',[\App\Http\Controllers\Back\KurumsalController::class,'update'])->name('kurumsal.update');

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



        //announcement Crud
        Route::get('/admin/announcement/index',[\App\Http\Controllers\Back\AnnouncementController::class,'index'])->name('announcement.index');
        Route::get('/admin/announcement/create',[\App\Http\Controllers\Back\AnnouncementController::class,'create'])->name('announcement.create');
        Route::post('/admin/announcement/store',[\App\Http\Controllers\Back\AnnouncementController::class,'store'])->name('announcement.store');
        Route::get('/admin/announcement/edit{id}',[\App\Http\Controllers\Back\AnnouncementController::class,'edit'])->name('announcement.edit');
        Route::post('/admin/announcement/update',[\App\Http\Controllers\Back\AnnouncementController::class,'update'])->name('announcement.update');
        Route::get('/admin/announcement/delete{id}',[\App\Http\Controllers\Back\AnnouncementController::class,'delete'])->name('announcement.delete');


     //projects Crud
     Route::get('/admin/projects/index',[\App\Http\Controllers\Back\ProjectsController::class,'index'])->name('projects.index');
     Route::get('/admin/projects/create',[\App\Http\Controllers\Back\ProjectsController::class,'create'])->name('projects.create');
     Route::post('/admin/projects/store',[\App\Http\Controllers\Back\ProjectsController::class,'store'])->name('projects.store');
     Route::get('/admin/projects/edit{id}',[\App\Http\Controllers\Back\ProjectsController::class,'edit'])->name('projects.edit');
     Route::post('/admin/projects/update',[\App\Http\Controllers\Back\ProjectsController::class,'update'])->name('projects.update');
     Route::get('/admin/projects/delete{id}',[\App\Http\Controllers\Back\ProjectsController::class,'delete'])->name('projects.delete');

        
    //User Crud
    Route::get('/admin/user/index',[\App\Http\Controllers\Back\UserController::class,'index'])->name('user.index');
    Route::post('/admin/user/editpassword',[\App\Http\Controllers\Back\UserController::class,'editpassword'])->name('user.editpassword');
    Route::post('/admin/user/profilupdate',[\App\Http\Controllers\Back\UserController::class,'profilupdate'])->name('user.profilupdate');



});
