<?php 

namespace App\Controllers;

class User_controller extends BaseController {

    public function registrarse() {
        $data['titulo'] = 'Registrarse';
        echo view('plantillas/encabezado', $data);
        echo view('plantillas/nav');
        echo view('plantillas/formRegistro');
        echo view('plantillas/footer');
    }

    public function registro_cliente() {




    }

}
?>