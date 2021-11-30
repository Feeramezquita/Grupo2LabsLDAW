<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
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
        $useradmin = User::create([
            "name" => "Fer",
            "email" => "fer@tec.mx",
            "password" => Hash::make("contrasena"),
            "fullaccess" => 'yes',
            "codigo" => 'adm1'
        ]);
        $user1 = User::create([
            "name" => "Adrian",
            "email" => "Adrian@tec.mx",
            "password" => Hash::make("password"),
            "fullaccess" => 'no',
            "codigo" => 'casa1'
        ]);
    }
}
