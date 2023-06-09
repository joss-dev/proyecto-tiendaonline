<?php

namespace App\Controllers;


use App\Models\Categoria_model;
use App\Models\Producto_model;
use App\Models\Consulta_model;
use App\Models\Detalle_venta_model;
use App\Models\Venta_model;
use CodeIgniter\CLI\Console;

class Admin_controller extends BaseController
{

    public function formProducto()
    {
        if (session()->login && session()->perfil == 1) {
            $categoriasModel = new Categoria_model();

            $categorias['marcas'] = $categoriasModel->findAll();
            $data['marcas'] = $categoriasModel->findAll();
            $data['titulo'] = 'Subir Producto';
            echo view('plantillas/encabezado', $data);
            echo view('plantillas/navAdmin');
            echo view('plantillas/formProducto', $categorias);
            echo view('plantillas/footer');
        } else {
            return redirect()->route('/');
        }
    }



    public function admin_view()
    {
        $categoriasModel = new Categoria_model();

        $data['marcas'] = $categoriasModel->findAll();
        if (session()->login && session()->perfil == 1) {
            $data['titulo'] = 'Administrador';
            echo view('plantillas/encabezado', $data);
            echo view('plantillas/navAdmin');
            echo view('plantillas/footer');
        } else {
            return redirect()->route('/');
        }
    }

    public function getConsultas()
    {
        $consultas = new Consulta_model();
        $data['consultas'] = $consultas->findAll();
        $categoriasModel = new Categoria_model();

        $data['marcas'] = $categoriasModel->findAll();
        $data['titulo'] = 'Administrador';
        echo view('plantillas/encabezado', $data);
        echo view('plantillas/navAdmin');
        echo view('plantillas/consultasAdmin');
        echo view('plantillas/footer');
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

    public function contestadoConsulta($id = null)
    {
        $consulta = new Consulta_model();
        $data = array('consulta_contestado' => 1);
        $consulta->update($id, $data);
        return redirect()->to('consultasAdmin')->with('MensajeConsulta', 'Marcado como contestado');
    }

    public function listarVentas()
    {
        $ventas = new Venta_model();
        

        $data['ventas'] = $ventas->join('usuarios', 'usuarios.id_usuario = venta.id_usuario')->findAll();
        $categoriasModel = new Categoria_model();

        $data['marcas'] = $categoriasModel->findAll();
        $data['titulo'] = 'Ventas';
        echo view('plantillas/encabezado', $data);
        echo view('plantillas/navAdmin');
        echo view('plantillas/ventas');
        echo view('plantillas/footer');
    }

    public function verDetalle($id = null) {
        $detalle = new Detalle_venta_model();
        $venta = new Venta_model();

        $data['venta'] = $venta->where('id_venta', $id)->join('usuarios', 'usuarios.id_usuario = venta.id_usuario')->first();

        $data['detalle'] = $detalle->where('detalle_venta.id_venta', $id)->join('venta', 'venta.id_venta = detalle_venta.id_venta')->join('productos', 'productos.id_producto = detalle_venta.id_producto')->findAll();
        $categoriasModel = new Categoria_model();

        $data['marcas'] = $categoriasModel->findAll();
        $data['titulo'] = 'Detalle de venta';
        echo view('plantillas/encabezado', $data);
        echo view('plantillas/navAdmin');
        echo view('plantillas/detalleVenta');
        echo view('plantillas/footer');
    }
}
