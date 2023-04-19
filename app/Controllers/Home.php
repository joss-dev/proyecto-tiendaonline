<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('plantillas/encabezado');
        echo view('plantillas/nav');
        echo view('plantillas/bienvenida');
        echo view('plantillas/sectionDestacados');
        echo view('plantillas/sectionNuevos');
        echo view('plantillas/footer');
    }

    public function quienesSomos() {
        echo view('plantillas/encabezado');
        echo view('plantillas/nav');
        echo view('plantillas/quienesSomos');
        echo view('plantillas/footer');
    }

    public function productos() {
        echo view('plantillas/encabezado');
        echo view('plantillas/nav');
        echo view('plantillas/catalogo');
        echo view('plantillas/footer');
    }

    public function terminosYcondiciones() {
        echo view('plantillas/encabezado');
        echo view('plantillas/nav');
        echo view('plantillas/terminos');
        echo view('plantillas/footer');
    }

    public function contacto() {
        echo view('plantillas/encabezado');
        echo view('plantillas/nav');
        echo view('plantillas/formContacto');
        echo view('plantillas/footer');
    }

    public function comercializacion() {
        echo view('plantillas/encabezado');
        echo view('plantillas/nav');
        echo view('plantillas/comercializacion');
        echo view('plantillas/footer');
    }
}
