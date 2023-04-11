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
        echo view('plantillas/footer');
    }

    public function productos() {
        echo view('plantillas/encabezado');
        echo view('plantillas/nav');
        echo view('plantillas/footer');
    }

    public function terminosYcondiciones() {
        echo view('plantillas/encabezado');
        echo view('plantillas/nav');
        echo view('plantillas/footer');
    }

    public function contacto() {
        echo view('plantillas/encabezado');
        echo view('plantillas/nav');
        echo view('plantillas/footer');
    }

    public function consultas() {
        echo view('plantillas/encabezado');
        echo view('plantillas/nav');
        echo view('plantillas/footer');
    }

    public function comercializacion() {
        echo view('plantillas/encabezado');
        echo view('plantillas/nav');
        echo view('plantillas/footer');
    }
}
