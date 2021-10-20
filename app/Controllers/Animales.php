<?php

namespace App\Controllers;

class Animales extends BaseController
{
    public function index()
    {
        return view('registroAnimal');
    }

    public function registrarAnimal()
    {
        $nombre=$this->request->getPost("nombre");
        $foto=$this->request->getPost("foto");
        $edad=$this->request->getPost("edad");
        $descripcion=$this->request->getPost("descripcion");
        $tipo=$this->request->getPost("tipo");

        $datos=array(
            "nombre"=>$nombre,
            "foto"=>$foto,
            "edad"=>$edad,
            "descripcion"=>$descripcion,
            "tipo"=>$tipo
        );

        print_r($datos);
    }
}