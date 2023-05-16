<?php

namespace App\Controllers;

use App\Models\Consulta_model;
use App\Models\Usuario_model;

class User_controller extends BaseController
{

    public function registrarse()
    {
        $data['titulo'] = 'Registrarse';
        echo view('plantillas/encabezado', $data);
        echo view('plantillas/nav');
        echo view('plantillas/formRegistro');
        echo view('plantillas/footer');
    }

    public function login_view()
    {
        $data['titulo'] = 'Iniciar Sesión';
        echo view('plantillas/encabezado', $data);
        echo view('plantillas/nav');
        echo view('plantillas/formLogin');
        echo view('plantillas/footer');
    }



    public function registrar_usuario()
    {
        $request = \Config\Services::request();

        if ($request->is('post')) {
            $rules = [
                'nombre' => 'required',
                'apellido' => 'required',
                'telefono' => 'required|numeric|is_natural_no_zero',
                'dni' => 'required|numeric|is_natural_no_zero',
                'correo' => 'required|valid_email|is_unique[usuarios.usuario_correo]',
                'pass' => 'required|min_length[8]',
                'repass' => 'required|min_length[8]|matches[pass]'
            ];

            $validations = $this->validate($rules);

            if ($validations) {
                $data = [
                    'usuario_nombre' => $request->getPost('nombre'),
                    'usuario_apellido' => $request->getPost('apellido'),
                    'usuario_correo' => $request->getPost('correo'),
                    'usuario_telefono' => $request->getPost('telefono'),
                    'usuario_dni' => $request->getPost('dni'),
                    'usuario_pass' => password_hash($request->getPost('pass'), PASSWORD_BCRYPT),
                    'usuario_estado' => 1, 
                    'perfil_id'=> 2
                ];

                $registroUsuario = new Usuario_model();
                $registroUsuario->insert($data);

                return redirect()->to('/');
            } else {
                $data['validation'] = $this->validator;
                $data['titulo'] = 'Registrarse';
                echo view('plantillas/encabezado', $data);
                echo view('plantillas/nav');
                echo view('plantillas/formRegistro');
                echo view('plantillas/footer');
            }
        }
    }

    public function registrar_consulta()
    {

        $request = \Config\Services::request();

        if ($request->is('post')) {
            $rules = [
                'nombre' => 'required',
                'correo' => 'required|valid_email',
                'mensaje' => 'required'
            ];

            $validations = $this->validate($rules);

            if ($validations) {
                $data = [
                    'consulta_nombre' => $request->getPost('nombre'),
                    'consulta_correo' => $request->getPost('correo'),
                    'consulta_mensaje' => $request->getPost('mensaje')
                ];

                $registroConsulta = new Consulta_model();
                $registroConsulta->insert($data);

                return redirect()->to('contacto');
            } else {
                $data['validation'] = $this->validator;
                $data['titulo'] = 'Contacto';
                echo view('plantillas/encabezado', $data);
                echo view('plantillas/nav');
                echo view('plantillas/formContacto');
                echo view('plantillas/footer');
            }
        }
    }

    public function login()
    {
    }
}
