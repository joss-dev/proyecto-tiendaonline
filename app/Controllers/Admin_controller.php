<?php

namespace App\Controllers;

use App\Models\Consulta_model;
use App\Models\Usuario_model;

class Admin_controller extends BaseController
{

    public function formProducto() {
        $data['titulo'] = 'Subir Producto';
        echo view('plantillas/encabezado', $data);
        echo view('plantillas/nav');
        echo view('plantillas/formProducto');
        echo view('plantillas/footer');
    }

}

?>