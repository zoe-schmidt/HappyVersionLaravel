<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{   
    public $guarded=[];

    public function categoria(){
        return $this->belongsTo("App/categoria","idCategoria");
    }
}
