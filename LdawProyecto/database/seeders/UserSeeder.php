<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;



class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                "id_user" => 1,
                "name" => "Fer",
                "password" => Hash::make("AdminPasswordSecure123"),
            ],
            [
                "id_user" => 2,
                "name" => "Adrian",
                "password" => Hash::make("AdminPasswordSecure12324"),
            ],
            [
                "id_user" => 3,
                "name" => "Rodrigo",
                "password" => Hash::make("AdminPasswordSecure12farqw3"),
            ]
        ]);
    }
}
