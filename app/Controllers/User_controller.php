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

                return redirect()->to('contacto')->with('Mensaje', 'Mensaje enviado correctamente, nos contactaremos a la brevedad.');
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

    public function login_usuario()
    {
        $request = \Config\Services::request();
        $session = \Config\Services::session();
        $validation = \Config\Services::validation();

        $validation->setRules(
            [
                'correo' => 'required|valid_email|',
                'pass' => 'required|min_length[8]',
            ],
            [
                "correo" => [
                    "required" => "El correo es obligatorio.",
                    "valid_email" => "El formato no es correcto.",
                ],
                "pass" => [
                    "required" => "La contraseña es obligatoria.",
                    "min_length" => "La contraseña contiene al menos 8 caracteres."
                ],
            ]
        );

        if ($validation->withRequest($this->request)->run()) {

            $usuario_model = new Usuario_model();

            $email = $request->getPost('correo');
            $pass = $request->getPost('pass');
            $user = $usuario_model->where('usuario_correo', $email)->first();

            if ($user) {
                $pass_user = $user['usuario_pass'];
                $pass_verif = password_verify($pass, $pass_user);

                if ($pass_verif) {
                    $data = [
                        'id' => $user['id_usuario'],
                        'nombre' => $user['usuario_nombre'],
                        'apellido' => $user['usuario_apellido'],
                        'perfil' => $user['perfil_id'],
                        'login' =>  TRUE
                    ];

                    $session->set($data);

                    switch ($session->get('perfil')) {
                        case '1':
                            return redirect()->route('user_admin');
                            break;
                        case '2':
                            return redirect()->route('/');
                            break;
                    }
                } else {
                    $session->setFlashdata('mensajeVerif', 'Correo electronico y/o contraseña incorrectos');
                    return redirect()->route('loginUsuario');
                }
            } else {
                $session->setFlashdata('mensajeVerif', 'Usuario no registrado');
                return redirect()->route('loginUsuario');
            }
        } else {
            $data['validation'] = $this->validator;
            $data['titulo'] = 'Iniciar Sesión';
            echo view('plantillas/encabezado', $data);
            echo view('plantillas/nav');
            echo view('plantillas/formLogin');
            echo view('plantillas/footer');
        }
    }

    public function registrar_usuario()
    {
        $request = \Config\Services::request();
        $validation = \Config\Services::validation();
        $session = \Config\Services::session();


        $validation->setRules(
            [
                'nombre' => 'required',
                'apellido' => 'required',
                'telefono' => 'required|numeric|is_natural_no_zero',
                'dni' => 'required|numeric|is_natural_no_zero',
                'correo' => 'required|valid_email|is_unique[usuarios.usuario_correo]',
                'pass' => 'required|min_length[8]',
                'repass' => 'required|min_length[8]|matches[pass]'

            ],
            [
                "nombre" => [
                    "required" => "El nombre es obligatorio."
                ],
                "apellido" => [
                    "required" => "El apellido es obligatorio."
                ],
                "telefono" => [
                    "required" => "El telefono es obligatorio.",
                    "numeric" => "El formato no es correcto.",
                    "is_natural_no_zero" => "El formato no es correcto."
                ],
                "dni" => [
                    "required" => "El dni es obligatorio.",
                    "numeric" => "El formato no es correcto.",
                    "is_natural_no_zero" => "El formato no es correcto."
                ],
                "correo" => [
                    "required" => "El correo es obligatorio.",
                    "valid_email" => "El formato no es correcto.",
                    "is_unique" => "El correo ya se encuentra registrado."
                ],
                "pass" => [
                    "required" => "La contraseña es obligatorio.",
                    "min_length" => "Debe contener al menos 8 caracteres."
                ],
                "repass" => [
                    "required" => "La contraseña es obligatorio.",
                    "min_length" => "Debe contener al menos 8 caracteres.",
                    "matches" => "Las contraseñas no coinciden."
                ],
            ]
        );


        if ($validation->withRequest($this->request)->run()) {
            $data = [
                'usuario_nombre' => $request->getPost('nombre'),
                'usuario_apellido' => $request->getPost('apellido'),
                'usuario_correo' => $request->getPost('correo'),
                'usuario_telefono' => $request->getPost('telefono'),
                'usuario_dni' => $request->getPost('dni'),
                'usuario_pass' => password_hash($request->getPost('pass'), PASSWORD_BCRYPT),
                'usuario_estado' => 1,
                'perfil_id' => 2
            ];

            $registroUsuario = new Usuario_model();
            $registroUsuario->insert($data);

             $email = $request->getPost('correo');
             $pass = $request->getPost('pass');
             $user = $registroUsuario->where('usuario_correo', $email)->first();

             $dataLogin = [
                 'id' => $user['id_usuario'],
                 'nombre' => $user['usuario_nombre'],
                 'apellido' => $user['usuario_apellido'],
                 'perfil' => $user['perfil_id'],
                 'login' =>  TRUE
             ];

             $session->set($dataLogin);

            return redirect()->to('/')->with('Msg', 'Usuario registrado exitosamente!');
        } else {
            $data['validation'] = $this->validator;
            $data['titulo'] = 'Registrarse';
            echo view('plantillas/encabezado', $data);
            echo view('plantillas/nav');
            echo view('plantillas/formRegistro');
            echo view('plantillas/footer');
        }
    }

    
    public function cerrar_sesion()
    {
        $session = \Config\Services::session();
        $session->destroy();
        return redirect()->route('loginUsuario');
    }
}
