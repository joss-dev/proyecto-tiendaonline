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
            
            if($this->request->getFile('imagenProducto')->isValid()) {
                $rules = [
                    'nombreProducto' => 'required',
                    'marcaProducto' => 'required|is_not_unique[marca.id_marca]',
                    'descripcionProducto' => 'required',
                    'precioProducto' => 'required',
                    'imagenProducto' => 'uploaded[imagenProducto]|max_size[imagenProducto, 4096]|is_image[imagenProducto]',
                    'stockProducto' => 'required|is_natural'
                ];

                $validations = $this->validate($rules);

                $img = $this->request->getFile('imagenProducto');
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

                $validations = $this->validate($rules);

                $data = [
                    'producto_nombre' => $request->getPost('nombreProducto'),
                    'producto_descripcion' => $request->getPost('descripcionProducto'),
                    'producto_precio' => $precioSinFormato,
                    'producto_stock' => $request->getPost('stockProducto'),
                    'producto_marca' => $request->getPost('marcaProducto'),
                ];
                
            }

            if ($validations) {  
                
                $productoModel = new Producto_model();

                $productoModel->update($idProducto, $data);

                return redirect()->to('gestionProductos')->with('MensajeProducto', 'Producto actualizado correctamente.');
            }else {
                $data['validation'] = $this->validator;
                $productoModel = new Producto_model();
                $categoriaModel = new Categoria_model();

                $data['marcas'] = $categoriaModel->findAll();
                $data['producto'] = $productoModel->where('id_producto', $idProducto)->first();

                $data['titulo'] = 'Editar Producto';
                echo view('plantillas/encabezado', $data);
                echo view('plantillas/navAdmin');
                echo view('plantillas/editarProducto');
                echo view('plantillas/footer');
            }
        }else {
            $data['validation'] = $this->validator;
            $productoModel = new Producto_model();
            $categoriaModel = new Categoria_model();

            $data['marcas'] = $categoriaModel->findAll();
            $data['producto'] = $productoModel->where('id_producto', $idProducto)->first();

            $data['titulo'] = 'Editar Producto';
            echo view('plantillas/encabezado', $data);
            echo view('plantillas/navAdmin');
            echo view('plantillas/editarProducto');
            echo view('plantillas/footer');
        }
    }

    public function eliminarProducto($id = null)
    {
        $data = array('producto_estado' => 0);
        $productoModel = new Producto_model();
        $productoModel->update($id, $data);
        return redirect()->to('gestionProductos')->with('MensajeProducto', 'Producto actualizado correctamente.');
    }


    public function verProducto($id = null) {      
        $productoModel = new Producto_model();
        $data['producto'] = $productoModel->where('id_producto', $id)->first();
        $data['titulo'] = $data['producto']['producto_nombre'];;
        
        if(session()->perfil == 1) {
            echo view('plantillas/encabezado', $data);
            echo view('plantillas/navAdmin');
            echo view('plantillas/producto');
            echo view('plantillas/footer');
        }else {
            echo view('plantillas/encabezado', $data);
            echo view('plantillas/nav');
            echo view('plantillas/producto');
            echo view('plantillas/footer');
        }  
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
