<?php

namespace App\Http\Controllers\Back;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Charts\MonthlyUsersChart;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Back\Services;
use App\Models\Back\ServicesCatergori;
use App\Models\Back\Slider;

class HomeController extends Controller
{
    public function home(MonthlyUsersChart $chart){

        return view('back.home',['chart' => $chart->build()]);
    }
}

