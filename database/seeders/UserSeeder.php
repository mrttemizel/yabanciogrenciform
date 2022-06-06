<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Murat TEMİZEL',
                'email' => 'info@murattemizel.com',
                'password' => '$2y$10$npPqUBqgbYqSMtrrG1UMneR0JKYqWLdr0pWPqVQFQ.b9Qa8ZBqOFK',
                'status' => 1,
            ]

        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
