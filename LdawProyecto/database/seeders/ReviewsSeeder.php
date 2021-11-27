<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('review')->insert([
            [
                "id_review" => 1,
                "id_user" => 1,
                "id_libro" => 1,
                "Comentario" => "Muy bueno",
                "Favorito" => "Si",
                "Calificacion" => 10,
            ],
            [
                "id_review" => 2,
                "id_user" => 2,
                "id_libro" => 2,
                "Comentario" => "Muy malo",
                "Favorito" => "No",
                "Calificacion" => 5,
            ]
        ]);
    }
}
