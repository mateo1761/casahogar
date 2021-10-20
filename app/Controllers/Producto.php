<?php

namespace App\Controllers;

class Producto extends BaseController
{
    public function index()
    {
        return view('registro');
    }

    public function registrar(){
        echo('Soy el controlado y recibo datos');
    }
}