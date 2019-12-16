<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    public $table = 'Carritos';
    public $guarded = [];

    public function product(){
        return $this->belongsTo(producto::class,'idProducto');
    }
}
