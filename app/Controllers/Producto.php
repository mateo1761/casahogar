<?php

namespace App\Controllers;

class Producto extends BaseController
{
    public function index()
    {
        return view('registro');
    }

    public function registrar(){

        $producto=$this->request->getPost("producto");
        $precio=$this->request->getPost("precio");
        $foto=$this->request->getPost("foto");
        $descripcion=$this->request->getPost("descripcion");
        $tipo=$this->request->getPost("tipo");

        $datos=array(
            
            "producto"=>$producto,
            "precio"=>$precio,
            "foto"=>$foto,
            "descripcion"=>$descripcion,
            "tipo"=>$tipo
            
        );

        print_r($datos);

    }
}