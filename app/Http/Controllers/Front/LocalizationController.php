<?php

namespace App\Http\Controllers\Front;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;


use Illuminate\Http\Request;

class LocalizationController extends Controller
{
   public function setLang($locale){
    App::setlocale($locale);
    Session::put("locale",$locale);
    return redirect()->back();
   }
}
