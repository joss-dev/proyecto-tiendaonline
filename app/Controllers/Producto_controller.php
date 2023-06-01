<?php

namespace App\Controllers;

use App\Models\Categoria_model;
use App\Models\Producto_model;

class Producto_controller extends BaseController
{

    public function gestion_view()
    {
        $productoModel = new Producto_model();
        $categoria = new Categoria_model();

        $data['categorias'] = $categoria->findAll();
        $data['producto'] = $productoModel->join('marca', 'marca.id_marca = productos.producto_marca')->findAll();
        $data['titulo'] = 'Gestionar Productos';

        echo view('plantillas/encabezado', $data);
        echo view('plantillas/navAdmin');
        echo view('plantillas/gestionProductos');
        echo view('plantillas/footer');
    }

    public function editarProducto($id = null)
    {
        $productoModel = new Producto_model();
        $categoriaModel = new Categoria_model();

        $data['marcas'] = $categoriaModel->findAll();
        $data['producto'] = $productoModel->where('id_producto', $id)->first();

        $data['titulo'] = 'Editar Producto';
        echo view('plantillas/encabezado', $data);
        echo view('plantillas/navAdmin');
        echo view('plantillas/editarProducto');
        echo view('plantillas/footer');
    }

    public function actualizarProducto()
    {
        $request = \Config\Services::request();

        $idProducto = $this->request->getPost('id_producto');
        $precio = $this->request->getPost('precioProducto');
        $precioSinFormato = str_replace('.', '', $precio);

        if ($request->is('post')) {

            $img = $this->request->getFile('imagenProducto');
            if($img->isValid()) {
                $rules = [
                    'nombreProducto' => 'required',
                    'marcaProducto' => 'required|is_not_unique[marca.id_marca]',
                    'descripcionProducto' => 'required',
                    'precioProducto' => 'required',
                    'imagenProducto' => 'required',
                    'stockProducto' => 'required|is_natural'
                ];

                
            $nombreAleatorio = $img->getRandomName();
            $img->move(ROOTPATH . 'public/img/ejemplos', $nombreAleatorio);
                
                $data = [
                    'producto_nombre' => $request->getPost('nombreProducto'),
                    'producto_descripcion' => $request->getPost('descripcionProducto'),
                    'producto_precio' => $precioSinFormato,
                    'producto_stock' => $request->getPost('stockProducto'),
                    'producto_marca' => $request->getPost('marcaProducto'),
                    'producto_imagen' => $nombreAleatorio
                ];
            }else {
                $rules = [
                    'nombreProducto' => 'required',
                    'marcaProducto' => 'required|is_not_unique[marca.id_marca]',
                    'descripcionProducto' => 'required',
                    'precioProducto' => 'required',
                    'stockProducto' => 'required|is_natural'
                ];

                $data = [
                    'producto_nombre' => $request->getPost('nombreProducto'),
                    'producto_descripcion' => $request->getPost('descripcionProducto'),
                    'producto_precio' => $precioSinFormato,
                    'producto_stock' => $request->getPost('stockProducto'),
                    'producto_marca' => $request->getPost('marcaProducto'),
                ];
            }
            
            $validations = $this->validate($rules);

            var_dump($validations);
            if ($validations) {  

                $productoModel = new Producto_model();

                $productoModel->update($idProducto, $data);

                return redirect()->to('gestionProductos')->with('MensajeProducto', 'Producto actualizado correctamente.');
            }
        }else {
            $this->editarProducto($idProducto);
        }
    }

    public function eliminarProducto($id = null)
    {
        $data = array('producto_estado' => 0);
        $productoModel = new Producto_model();
        $productoModel->update($id, $data);
        return redirect()->to('gestionProductos')->with('MensajeProducto', 'Producto actualizado correctamente.');
    }

    public function activarProducto($id)
    {
        $data = [
            'producto_estado' => '1'
        ];
        $productoModel = new Producto_model();
        $productoModel->update($id, $data);
        return redirect()->to('gestionProductos')->with('MensajeProducto', 'Producto actualizado correctamente.');
    }
}
