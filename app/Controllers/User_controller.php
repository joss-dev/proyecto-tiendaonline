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

    public function login_view() {
        $data['titulo'] = 'Iniciar Sesión';
        echo view('plantillas/encabezado', $data);
        echo view('plantillas/nav');
        echo view('plantillas/formLogin');
        echo view('plantillas/footer');
    }



    public function registro_cliente() {

    }

    public function registrar_consulta() {

        $request = \Config\Services::request();

        if($request->is('post')) {
            $rules = [
                'nombre' => 'required',
                'correo' => 'required|valid_email',
                'mensaje' => 'required'
            ];

            $validations = $this->validate($rules);

            if($validations) {


            }else {

                $data['validation'] = $this->validator;

            }
        }
        $data['titulo'] = 'Contacto';
            echo view('plantillas/encabezado', $data);
            echo view('plantillas/nav');
            echo view('plantillas/formContacto');
            echo view('plantillas/footer');
    }    

    public function login() {

    }

}
?>