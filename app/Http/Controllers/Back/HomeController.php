<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Back\Services;
use App\Models\Back\ServicesCatergori;
use App\Models\Back\Slider;

class HomeController extends Controller
{
    public function home(){

        return view('back.home', 
        [
            'servicesCategori' => ServicesCatergori::all(),
             'services' => Services::all(),
             'slider' => Slider::all(),
        ]);
    }
}

