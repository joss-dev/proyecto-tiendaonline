<?php

namespace App\Controllers;

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

    public function quienesSomos() {
        $data['titulo'] = 'Quiénes Somos';
        echo view('plantillas/encabezado', $data);
        echo view('plantillas/nav');
        echo view('plantillas/quienesSomos');
        echo view('plantillas/footer');
    }

    public function productos() {
        $data['titulo'] = 'Productos';
        echo view('plantillas/encabezado', $data);
        echo view('plantillas/nav');
        echo view('plantillas/catalogo');
        echo view('plantillas/footer');
    }

    public function terminosYcondiciones() {
        $data['titulo'] = 'Terminos y Condiciones';
        echo view('plantillas/encabezado', $data);
        echo view('plantillas/nav');
        echo view('plantillas/terminos');
        echo view('plantillas/footer');
    }

    public function contacto() {
        $data['titulo'] = 'Contacto';
        echo view('plantillas/encabezado', $data);
        echo view('plantillas/nav');
        echo view('plantillas/formContacto');
        echo view('plantillas/footer');
    }

    public function comercializacion() {
        $data['titulo'] = 'Comercialización';
        echo view('plantillas/encabezado', $data);
        echo view('plantillas/nav');
        echo view('plantillas/comercializacion');
        echo view('plantillas/footer');
    }
}
