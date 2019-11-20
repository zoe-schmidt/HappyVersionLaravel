<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller{
    public function irAHome(){
        return view("home/index");
    }

public function irAContacto(){
    return view("home/contacto");
}

public function irAFaq(){
    return view("home/faq");
}
}




