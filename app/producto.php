<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{   //esta bien que el nombre del table sea el plural del nombre del modelo?//
    public $table="productos";
    public $primaryKey="id";
    public $guarded=[];
    // no creo la variable timestamp porque entiendo que ya existe en la base de datos//

    //falta agregar las imagenes a la base de datos//
}
