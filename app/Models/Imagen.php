<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    use HasFactory;
    protected $table = "imagenes";
    protected $primaryKey = "id_imagen";
    public $timestamps = false;
}

function identificador(){
    $img = Imagen::where('titulo', 'identificador')->get();

    return $img;
}
