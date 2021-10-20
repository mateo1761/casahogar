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

        if($this->validate('formularioProducto')){
            echo ('Todo bien');
        }
        else {
            $mensaje = "campos sin llenar";
            return redirect()->to(site_url('/productos/registro'))->with('mensaje', $mensaje);
        }

        /*
        $datos=array(
            
            "producto"=>$producto,
            "precio"=>$precio,
            "foto"=>$foto,
            "descripcion"=>$descripcion,
            "tipo"=>$tipo
            
        );

        print_r($datos);*/

    }
}