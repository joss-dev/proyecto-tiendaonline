<?php

namespace App\Controllers;

use App\Models\Categoria_model;
use App\Models\Producto_model;

class Producto_controller extends BaseController
{

    public function gestion_view()
    {
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

    public function actualizarProducto($id = null)
    {
        $request = \Config\Services::request();
        //validar datos ingresados
        //ver si cambio la imagen

        $id = $request->getPost('id');
        $precio = $this->request->getPost('precioProducto');
        $precioSinFormato = str_replace('.', '', $precio);

        $data = [
            'producto_nombre' => $request->getPost('nombreProducto'),
            'producto_descripcion' => $request->getPost('descripcionProducto'),
            'producto_precio' => $precioSinFormato,
            'producto_stock' => $request->getPost('stockProducto'),
            'producto_marca' => $request->getPost('marcaProducto'),
            // 'producto_imagen' => $nombreAleatorio,
            // 'producto_estado' => 1
        ];

        $productoModel = new Producto_model();
        $productoModel->update($id, $data);

        return redirect()->to('')->with('MensajeProducto', 'Producto actualizado correctamente.');
    }

    public function eliminarProducto($id = null) {
        $data = array('producto_estado' => '0');
        $productoModel = new Producto_model();
        $productoModel->update($id, $data);
        return redirect()->to('')->with('MensajeProducto', 'Producto actualizado correctamente.');
    }

    public function activarProducto($id = null) {
        $data = array('producto_estado' => '1');
        $productoModel = new Producto_model();
        $productoModel->update($id, $data);
        return redirect()->to('')->with('MensajeProducto', 'Producto actualizado correctamente.');
    }

}
