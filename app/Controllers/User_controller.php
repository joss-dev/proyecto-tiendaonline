<?php 

namespace App\Controllers;

use App\Models\Consulta_model;

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
                $data = [
                    'consulta_nombre' => $request->getPost('nombre'),
                    'consulta_correo' => $request->getPost('correo'),
                    'consulta_mensaje' => $request->getPost('mensaje')
                ];
                
                $registroConsulta = new Consulta_model();
                $registroConsulta->insert($data);

                return redirect()->to('contacto')->with('Msg', 'Su mensaje fue enviado correctamente, nos pondremos en contacto a la brevedad');
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