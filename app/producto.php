<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{   //no agrego la variable $table porque el nombre es el plurarl del modelo//
    public $primaryKey="id";
    public $guarded=[];
    // no creo la variable timestamp porque entiendo que ya existe en la base de datos//

    //falta agregar las imagenes a la base de datos//

    public function categoria(){
        return $this->belongsTo("App/categoria","idCategoria");
    }
}
