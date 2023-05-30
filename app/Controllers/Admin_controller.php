<?php

namespace App\Controllers;

use App\Models\Consulta_model;
use App\Models\Usuario_model;
use App\Models\Categoria_model;
use App\Controllers\Producto_controller;
use App\Models\Producto_model;

class Admin_controller extends BaseController
{

    public function formProducto()
    {
        if (session()->login && session()->perfil == 1) {
            $categoriasModel = new Categoria_model();

            $categorias['marcas'] = $categoriasModel->findAll();

            $data['titulo'] = 'Subir Producto';
            echo view('plantillas/encabezado', $data);
            echo view('plantillas/navAdmin');
            echo view('plantillas/formProducto', $categorias);
            echo view('plantillas/footer');
        } else {
            return redirect()->route('/');
        }
    }

    public function productosAdmin() {
        if (session()->login && session()->perfil == 1) {
            $productos = new Producto_model();

            $data['productos'] = $productos->findAll();

            $data['titulo'] = 'Productos';
            echo view('plantillas/encabezado', $data);
            echo view('plantillas/navAdmin');
            echo view('plantillas/catalogo');
            echo view('plantillas/footer');
        } else {
            return redirect()->route('/');
        }
    }


    public function admin_view()
    {
        if (session()->login && session()->perfil == 1) {
            $data['titulo'] = 'Administrador';
            echo view('plantillas/encabezado', $data);
            echo view('plantillas/navAdmin');
            echo view('plantillas/footer');
        } else {
            return redirect()->route('/');
        }
    }


    public function registrar_producto()
    {

        $request = \Config\Services::request();

        if ($request->is('post')) {
            $rules = [
                'nombreProducto' => 'required',
                'marcaProducto' => 'required|is_not_unique[marca.id_marca]',
                'descripcionProducto' => 'required',
                'precioProducto' => 'required',
                'imagenProducto' => 'uploaded[imagenProducto]|max_size[imagenProducto, 4096]|is_image[imagenProducto]',
                'stockProducto' => 'required|is_natural'
            ];

            $validations = $this->validate($rules);

            if ($validations) {
                $img = $this->request->getFile('imagenProducto');
                $nombreAleatorio = $img->getRandomName();
                $img->move(ROOTPATH . 'public/img/ejemplos', $nombreAleatorio);

                $precio = $this->request->getPost('precioProducto');
                $precioSinFormato = str_replace('.', '', $precio);

                $data = [
                    'producto_nombre' => $request->getPost('nombreProducto'),
                    'producto_descripcion' => $request->getPost('descripcionProducto'),
                    'producto_precio' => $precioSinFormato,
                    'producto_stock' => $request->getPost('stockProducto'),
                    'producto_marca' => $request->getPost('marcaProducto'),
                    'producto_imagen' => $nombreAleatorio,
                    'producto_estado' => 1
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
