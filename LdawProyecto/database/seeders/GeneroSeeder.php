<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genero')->insert([
            [
                "id_genero" => 1,
                "Nombre_Genero" => "Romance"
            ],
            [
                "id_genero" => 2,
                "Nombre_Genero" => "Comedia"
            ],
            [
                "id_genero" => 3,
                "Nombre_Genero" => "Terror"
            ],


        ]);
    }
}
