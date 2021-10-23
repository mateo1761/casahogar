<?php

namespace App\Controllers;

use App\Models\Animalesmodelo;

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

        if($this->validate('formularioAnimal')){

            $datos=array(
                "nombre"=>$nombre,
                "foto"=>$foto,
                "edad"=>$edad,
                "descripcion"=>$descripcion,
                "tipo"=>$tipo
            );

            try{
                $animales = new Animalesmodelo();
                $animales -> insert($datos);
                return redirect()->to(site_url('/animales/registro'))->with('mensaje',"Exito guardando los datos");
            }
            catch(\Exception $error){
                return redirect()->to(site_url('/animales/registro'))->with('mensaje',$error->getMessage());
            }

        }
        else {
            $mensaje = "campos sin llenar";
            return redirect()->to(site_url('/animales/registro'))->with('mensaje',$mensaje);
        }

        /*
        $datos=array(
            "nombre"=>$nombre,
            "foto"=>$foto,
            "edad"=>$edad,
            "descripcion"=>$descripcion,
            "tipo"=>$tipo
        );

        print_r($datos);*/
    }

    public function buscar(){

        $animalModelo = new Animalesmodelo();

        try{
            $animalesConsultado = $animalModelo->findAll();
        }
        catch(\Exception $error){
            return redirect()->to(site_url('/animales/registro'))->with('mensaje',$error->getMessage);
        }

    }
}