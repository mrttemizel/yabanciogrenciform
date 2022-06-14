<?php

namespace Database\Seeders;


use App\Models\Back\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = [
            [
                
                'email' => 'info@murattemizel.com',
                'adress' => 'Çıplaklı Mah. Akdeniz Bulvarı No:290 A Döşemealtı/Antalya',
                'title_tr' => 'Antalya Bilim Üniversitesi',
                'title_en' => 'Antalya Bilim University',
                'phone' => '+90 242 245 01 00',
                
            ]

        ];

        foreach ($settings as $setting) {
            Setting::create($setting);
        }
    }
}
