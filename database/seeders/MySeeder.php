<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facade\Hash;

class MySeeder extends Seeder
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
                "name" => "Hardik Savani",
                "email" => "hardik@gmail.com",
                "password"=>"123456"
            ],
            [
                "name" => "Vimal Kashiyani",
                "email" => "vimal@gmail.com",
                "password"=>"123456"
               
            ],
            [
                "name" => "Harshad Pathak",
                "email" => "harshad@gmail.com",
                "password"=> Hash::make("123456")
                
            ]
        ];
  
        foreach ($users as $key => $value) {
            User::create($value);
        }
    }
}
