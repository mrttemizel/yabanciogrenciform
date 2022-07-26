<?php

namespace App\Charts;
use App\Models\Students;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class MonthlyUsersChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\HorizontalBar
    {
        return $this->chart->horizontalBarChart()
        ->setTitle('Bolumlere Gore Basvuran Kisi Sayisi')
        ->setSubtitle('Toplam Sayi:'.Students::all()->count())
        ->setColors(['#00acc8', '#00acc8'])
            ->addData('Toplam Basvuru', [Students::where('bolum_id', '=', 1)->count(),
            Students::where('bolum_id', '=', 2)->count(),
            Students::where('bolum_id', '=', 3)->count(),
            Students::where('bolum_id', '=', 4)->count(),
            Students::where('bolum_id', '=', 5)->count(),
            Students::where('bolum_id', '=', 6)->count(),
            Students::where('bolum_id', '=', 7)->count(),
            Students::where('bolum_id', '=', 8)->count(),
            Students::where('bolum_id', '=', 9)->count(),
            Students::where('bolum_id', '=', 10)->count(),
            Students::where('bolum_id', '=', 11)->count(),
            Students::where('bolum_id', '=', 12)->count(),
            Students::where('bolum_id', '=', 13)->count(),
            Students::where('bolum_id', '=', 14)->count(),
            Students::where('bolum_id', '=', 15)->count(),
            Students::where('bolum_id', '=', 16)->count(),
            Students::where('bolum_id', '=', 17)->count(),
            Students::where('bolum_id', '=', 18)->count(),
            Students::where('bolum_id', '=', 19)->count(),
            Students::where('bolum_id', '=', 20)->count(),
           ])
        
        ->setXAxis(['Economics',
            'Business Administration',
            'Political Science and International Relations)',
            'Psychology',
            'Computer Engineering',
            'Electrical and Electronics Engineering',
            'Industrial Engineering',
            'Civil Engineering',
            'Mechanical Engineering',
            'Law',
            'Tourism and Hotel Managenment',
            'Gastronomy And Culinary Arts',
            'Architecture',
            'Interior Architecture and Environmental Design',
            'Pilotage(Turkish)',
            'Midwifery',
            'Nutrition ad Dictetics',
            'Nursing',
            'Physiotherapy and Rehabilition',
            'Dentistry',
            ]);
    }
}
