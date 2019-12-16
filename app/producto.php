<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\User;

class producto extends Model
{   
    public $guarded=[];

    public function categoria(){
        return $this->belongsTo("App/categoria","idCategoria");
    }

    public function usuario(){
        $this->belongsToMany(User::class,"Carrito","idUsuario","idProducto");
    }
}
