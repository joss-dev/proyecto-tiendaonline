<?php

namespace App\Controllers;

use App\Models\Consulta_model;
use App\Models\Usuario_model;
use App\Models\Categoria_model;
use App\Controllers\Producto_controller;
use App\Models\Producto_model;

class Admin_controller extends BaseController
{

    public function formProducto() {
        $categoriasModel = new Categoria_model();

        $categorias['marcas'] = $categoriasModel->findAll();

        $data['titulo'] = 'Subir Producto';
        echo view('plantillas/encabezado', $data);
        echo view('plantillas/nav');
        echo view('plantillas/formProducto', $categorias);
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
                'precioProducto' => 'required',
                'imagenProducto' => 'required|is_image',
                'stockProducto' => 'required|is_natural'
            ];

            $validations = $this->validate($rules);

            if ($validations) {
                $data = [
                    'producto_nombre' => $request->getPost('nombreProducto'),
                    'producto_descripcion' => $request->getPost('descripcionProducto'),
                    'producto_precio' => $request->getPost('precioProducto'),
                    'producto_stock' => $request->getPost('stockProducto'),
                    'producto_marca' => $request->getPost('marcaProducto'),
                    'producto_imagen' => $request->getPost('imagenProducto')
                ];

                $registroProducto = new Producto_model();
                $registroProducto->insert($data);

                return redirect()->to('formProducto')->with('MensajeProducto', 'Producto cargado correctamente.');
            } else {
                $this->formProducto();
            }
        }
    }

}

?>