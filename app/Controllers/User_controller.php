<?php

namespace App\Controllers;

use App\Models\Consulta_model;
use App\Models\Persona_model;

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



    public function registro_persona()
    {
        $request = \Config\Services::request();

        if ($request->is('post')) {
            $rules = [
                'nombre' => 'required',
                'apellido' => 'required',
                'telefono' => 'required|numeric|is_natural_no_zero',
                'correo' => 'required|valid_email|is_unique[personas.persona_correo]',
                'pass' => 'required|min_length[8]',
                'repass' => 'required|min_length[8]|matches[pass]'
            ];

            $validations = $this->validate($rules);

            if ($validations) {
                $data = [
                    'persona_nombre' => $request->getPost('nombre'),
                    'persona_apellido' => $request->getPost('apellido'),
                    'persona_correo' => $request->getPost('correo'),
                    'persona_telefono' => $request->getPost('telefono'),
                    'persona_pass' => password_hash($request->getPost('pass'), PASSWORD_BCRYPT),
                    'persona_estado' => 1
                ];

                $registroConsulta = new Persona_model();
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
