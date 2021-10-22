<?php

namespace App\Controllers;

use App\Models\Productomodelo;

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

            $datos=array(
            
                "producto"=>$producto,
                "precio"=>$precio,
                "foto"=>$foto,
                "descripcion"=>$descripcion,
                "tipo"=>$tipo  

            );

            try{
                $producto = new Productomodelo();
                $producto -> insert($datos);
                return redirect()->to(site_url('/productos/registro'))->with('mensaje',"Exito guardando los datos");
            }
            catch(\Exception $error){
                return redirect()->to(site_url('/productos/registro'))->with('mensaje',$error->getMessage());
            }
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