<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employee;
use App\Models\User;
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
                "name" => "Hardik Savani",
                "email" => "hardik@gmail.com",
                "address"=>"This is Address",
                "city"=>"This is City",
                "state"=>"This is State",
                "Zip"=>"166776",
             
                
                "birthdate" => "2001-05-23"
            ],
            [
                "name" => "Vimal Kashiyani",
                "email" => "vimal@gmail.com",
                "address"=>"This is Address",
                "city"=>"This is City",
                "state"=>"This is State",
                "Zip"=>"166776",
                
                "birthdate" => "2001-06-23"
            ],
            [
                "name" => "Harshad Pathak",
                "email" => "harshad@gmail.com",
                "address"=>"This is Address",
                "city"=>"This is City",
                "state"=>"This is State",
                "Zip"=>"166776",
                
                "birthdate" => "2001-07-23"
            ]
        ];
  
        foreach ($users as $key => $value) {
            Employee::create($value);
        }
    }
    }

