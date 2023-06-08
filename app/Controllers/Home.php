<?php

namespace App\Controllers;

use App\Models\Producto_model;
use App\Models\Categoria_model;

class Home extends BaseController
{
    public function index()
    {
        $productos = new Producto_model();
        $data['ultimos'] = $productos->orderBy('created_at', 'desc')->limit(3)->find();
        $data['baratos'] = $productos->orderBy('producto_precio', 'asc')->limit(3)->find();
       

        $categoriaModel = new Categoria_model();
        $data['marcas'] = $categoriaModel->findAll(); 
        $data['titulo'] = 'Home';
        echo view('plantillas/encabezado', $data);
        echo view('plantillas/nav');
        echo view('plantillas/marcasPrincipales');
        echo view('plantillas/bienvenida');
        echo view('plantillas/sectionNuevos');
        echo view('plantillas/sectionDestacados');
        echo view('plantillas/maps');
        echo view('plantillas/footer');
    }

    public function quienesSomos()
    {
        $categoriaModel = new Categoria_model();
        $data['marcas'] = $categoriaModel->findAll(); 
        $data['titulo'] = 'Quiénes Somos';
        echo view('plantillas/encabezado', $data);
        echo view('plantillas/nav');
        echo view('plantillas/quienesSomos');
        echo view('plantillas/footer');
    }

    public function productos($id = null)
    {
        $productos = new Producto_model();
        $categoriaModel = new Categoria_model();
        if ($id == 'all') {
            $data['productos'] = $productos->where('producto_estado', 1)->where('producto_stock >', 0)->findAll();
            $data['titulo'] = 'Productos';
        } else {
            $data['productos'] = $productos->where('producto_estado', 1)->where('producto_stock >', 0)->where('producto_marca', $id)->findAll();
            $marca = $categoriaModel->where('id_marca', $id)->findAll();
            $data['titulo'] = $marca[0]['marca_nombre'];
        }

        $data['marcas'] = $categoriaModel->findAll(); 

        if (session()->perfil == 1) {
            echo view('plantillas/encabezado', $data);
            echo view('plantillas/navAdmin');
            echo view('plantillas/catalogo');
            echo view('plantillas/footer');
        } else {
            echo view('plantillas/encabezado', $data);
            echo view('plantillas/nav');
            echo view('plantillas/catalogo');
            echo view('plantillas/footer');
        }
    }

    public function terminosYcondiciones()
    {
        $categoriaModel = new Categoria_model();
        $data['marcas'] = $categoriaModel->findAll(); 
        $data['titulo'] = 'Terminos y Condiciones';
        echo view('plantillas/encabezado', $data);
        echo view('plantillas/nav');
        echo view('plantillas/terminos');
        echo view('plantillas/footer');
    }

    public function contacto()
    {
        $categoriaModel = new Categoria_model();
        $data['marcas'] = $categoriaModel->findAll(); 
        $data['titulo'] = 'Contacto';
        echo view('plantillas/encabezado', $data);
        echo view('plantillas/nav');
        echo view('plantillas/formContacto');
        echo view('plantillas/footer');
    }

    public function comercializacion()
    {
        $categoriaModel = new Categoria_model();
        $data['marcas'] = $categoriaModel->findAll(); 
        $data['titulo'] = 'Comercialización';
        echo view('plantillas/encabezado', $data);
        echo view('plantillas/nav');
        echo view('plantillas/comercializacion');
        echo view('plantillas/footer');
    }

    public function perfil()
    {
        $categoriaModel = new Categoria_model();
        $data['marcas'] = $categoriaModel->findAll(); 
        if (session()->login) {
            if (session()->perfil == 1) {
                $data['titulo'] = 'Perfil';
                echo view('plantillas/encabezado', $data);
                echo view('plantillas/navAdmin');
                echo view('plantillas/perfil');
                echo view('plantillas/footer');
            } else {
                $data['titulo'] = 'Perfil';
                echo view('plantillas/encabezado', $data);
                echo view('plantillas/nav');
                echo view('plantillas/perfil');
                echo view('plantillas/footer');
            }
        } else {
            return redirect()->route('loginUsuario');
        }
    }
}
