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


    public function registrar_producto()
    {

        $request = \Config\Services::request();

        if ($request->is('post')) {
            $rules = [
                'nombreProducto' => 'required',
                'marcaProducto' => 'required',
                'descripcionProducto' => 'required',
                'precioProducto' => 'required|alpha_numeric_space',
                'imagenProducto' => 'required|valid_email',
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

}

?>