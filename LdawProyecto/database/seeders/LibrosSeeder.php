<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class LibrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('libro')->insert([
            [
                "id_libro" => 1,
                "Titulo" => "Administrador",
                "Autor" => "Brecht Hesse",
                "AnoPublicacion" => "1965",
                "Paginas" => "250",
                "Editorial" => "Taurus",
                "LugarPublicacion" => "USA",
                "id_genero" => 2,
            ]
        ]);
    }
}
