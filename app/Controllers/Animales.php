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
                "fotografia"=>$foto,
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
    }

    public function buscar(){

        try{
            $animalModelo = new Animalesmodelo();
            $animalesConsultado = $animalModelo->findAll();
            $animales = array('animales' => $animalesConsultado);
            return view('listaAnimales',$animales);
        }
        catch(\Exception $error){
            return redirect()->to(site_url('/animales/registro'))->with('mensaje',$error->getMessage());
        }
    }

    public function eliminar($id){
        
        try{
            $animalModelo = new Animalesmodelo();
            $animalModelo -> where('id',$id)->delete();
            return redirect()->to(site_url('/animales/registro'))->with('mensaje',"Exito elimando el animal");
        }
        catch(\Exception $error){
            return redirect()->to(site_url('/animales/registro'))->with('mensaje',$error->getMessage());
        }
    }

    public function editar($id){
        $nombre = $this->request->getPost('nombre');
        //$tipo = $this->request->getPost('tipo');
        $edad = $this->request->getPost('edad');
        //$descripcion = $this->request->getPost('descripcion');

        if($this->validate('formListadoAnm')){

            $datos=array(
                "nombre"=>$nombre,
                "edad"=>$edad  
            );

            try{
                $animalModelo = new Animalesmodelo();
                $animalModelo -> update($id,$datos);
                return redirect()->to(site_url('/animales/registro'))->with('mensaje',"Se realizo con exito los cambios");
            }
            catch(\Exception $error){
                return redirect()->to(site_url('/animales/registro'))->with('mensaje',$error->getMessage());
            }
        }
        else {
            $mensaje = "campos sin llenar";
            return redirect()->to(site_url('/animales/registro'))->with('mensaje', $mensaje);
        }
    }

    public function listaPerro(){

        try{
            $perro = new Animalesmodelo();
            $consultados = $perro->findAll();
            $animales=array('animales'=>$consultados);
            return view('listaPerro', $animales);
        }
        catch(\Exception $error){
            return redirect()->to(site_url('/animales/registro'))->with('mensaje',$error->getMessage());
        }
    }

    public function listaGato(){

        try{
            $gato = new Animalesmodelo();
            $consultados = $gato->findAll();
            $animales=array('animales'=>$consultados);
            return view('listaGato', $animales);
        }
        catch(\Exception $error){
            return redirect()->to(site_url('/animales/registro'))->with('mensaje',$error->getMessage());
        }
    }

    public function listaAve(){

        try{
            $ave = new Animalesmodelo();
            $consultados = $ave->findAll();
            $animales=array('animales'=>$consultados);
            return view('listaAve', $animales);
        }
        catch(\Exception $error){
            return redirect()->to(site_url('/animales/registro'))->with('mensaje',$error->getMessage());
        }
    }

    public function listaCaballo(){

        try{
            $caballo = new Animalesmodelo();
            $consultados = $caballo->findAll();
            $animales=array('animales'=>$consultados);
            return view('listaCaballo', $animales);
        }
        catch(\Exception $error){
            return redirect()->to(site_url('/animales/registro'))->with('mensaje',$error->getMessage());
        }
    }

    public function listaPez(){

        try{
            $pez = new Animalesmodelo();
            $consultados = $pez->findAll();
            $animales=array('animales'=>$consultados);
            return view('listaPez', $animales);
        }
        catch(\Exception $error){
            return redirect()->to(site_url('/animales/registro'))->with('mensaje',$error->getMessage());
        }
    }
}