<?php

namespace App\Controllers;

use App\Models\Producto_model;
use App\Models\Categoria_model;

class Home extends BaseController
{
    public function index()
    {
        $data['titulo'] = 'Home';
        echo view('plantillas/encabezado', $data);
        echo view('plantillas/nav');
        echo view('plantillas/marcasPrincipales');
        echo view('plantillas/bienvenida');
        echo view('plantillas/sectionDestacados');
        echo view('plantillas/sectionNuevos');
        echo view('plantillas/maps');
        echo view('plantillas/footer');
    }

    public function quienesSomos()
    {
        $data['titulo'] = 'Quiénes Somos';
        echo view('plantillas/encabezado', $data);
        echo view('plantillas/nav');
        echo view('plantillas/quienesSomos');
        echo view('plantillas/footer');
    }

    public function productos($id=null)
    {
        $productos = new Producto_model();
        $categoria = new Categoria_model();
        if($id == 'all') {
            $data['productos'] = $productos->where('producto_estado', 1)->where('producto_stock >', 0)->findAll();
            $data['titulo'] = 'Productos';
        }else {
            $data['productos'] = $productos->where('producto_estado', 1)->where('producto_stock >', 0)->where('producto_marca', $id)->findAll();
            $marca = $categoria->where('id_marca', $id)->findAll();
            $data['titulo'] = $marca[0]['marca_nombre'];
        }
        
        echo view('plantillas/encabezado', $data);
        echo view('plantillas/nav');
        echo view('plantillas/catalogo');
        echo view('plantillas/footer');
    }

    public function terminosYcondiciones()
    {
        $data['titulo'] = 'Terminos y Condiciones';
        echo view('plantillas/encabezado', $data);
        echo view('plantillas/nav');
        echo view('plantillas/terminos');
        echo view('plantillas/footer');
    }

    public function contacto()
    {
        $data['titulo'] = 'Contacto';
        echo view('plantillas/encabezado', $data);
        echo view('plantillas/nav');
        echo view('plantillas/formContacto');
        echo view('plantillas/footer');
    }

    public function comercializacion()
    {
        $data['titulo'] = 'Comercialización';
        echo view('plantillas/encabezado', $data);
        echo view('plantillas/nav');
        echo view('plantillas/comercializacion');
        echo view('plantillas/footer');
    }

    public function perfil()
    {
        if (session()->login) {
            if (session()->perfil == 1) {
                $data['titulo'] = 'Perfil';
                echo view('plantillas/encabezado', $data);
                echo view('plantillas/navAdmin');
                echo view('plantillas/perfil');
                echo view('plantillas/footer');
            }else {
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
