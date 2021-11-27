<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libro', function (Blueprint $table) {
            $table->id('id_libro');
            $table-> string('Titulo');
            $table-> string('Autor');
            $table-> string('AnoPublicacion');
            $table-> string('Paginas');
            $table-> string('Editorial');
            $table-> string('LugarPublicacion');
            $table-> foreignID('id_genero');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libro');
    }
}
