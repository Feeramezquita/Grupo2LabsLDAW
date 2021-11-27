<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;
    protected $table = 'libro';
    protected $primaryKey = 'id_libro';
    protected $fillable = [
        'id_libro',
        'Titulo',
        'Autor',
        'AnoPublicacion',
        'Paginas',
        'Editorial',
        'LugarPublicacion'
    ];
    public $timestamps = false;

}
