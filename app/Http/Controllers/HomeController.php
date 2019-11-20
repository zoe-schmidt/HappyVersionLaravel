<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller{
    public function irAHome(){
        return view("home/index");
    }
}
