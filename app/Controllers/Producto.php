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
    }

    public function buscar(){
        try{
            $Productomodelo = new Productomodelo();
            $productosConsultados = $Productomodelo->findAll();
            $producto = array('producto' => $productosConsultados);
            return view('listaProductos' , $producto);

        }
        catch(\Exception $error){
            return redirect()->to(site_url('/productos/registro'))->with('mensaje', $error->getMessage());
        }
    }

    public function eliminar($id){

        try{
            $Productomodelo = new Productomodelo();
            $Productomodelo -> where('id', $id)->delete();
            return redirect()->to(site_url('/productos/registro'))->with('mensaje', 'Exito eliminado el producto');
        }
        catch(\Exception $error){
            return redirect()->to(site_url('/productos/registro'))->with('mensaje',$error->getMessage());
        }
    }

    public function editar($id){
        $producto = $this->request->getPost('producto');
        $tipo = $this->request->getPost('tipo');
        $precio = $this->request->getPost('precio');
        $descripcion = $this->request->getPost('descripcion');

        $datos = array(
            'producto' => $producto,
            'tipo' => $tipo,
            'precio' => $precio,
            'descripcion' => $descripcion
        );

        try {
            $Productomodelo = new Productomodelo();
            $Productomodelo -> update($id,$datos);
            return redirect()->to(site_url('/productos/registro'))->with('mensaje','Se realizo con exito los cambios');
        }
        catch(\Exception $error) {
            return redirect()->to(site_url('/productos/registro'))->with('mensaje',$error->getMessage());
        }
    }
}