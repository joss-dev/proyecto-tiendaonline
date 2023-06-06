<?php

namespace App\Controllers;

use App\Models\Producto_model;
use CodeIgniter\CLI\Console;

class Carrito_controller extends BaseController
{

    public function verCarrito() {
        $data['titulo'] = 'Carrito';
        echo view('plantillas/encabezado', $data);
        echo view('plantillas/nav');
        echo view('plantillas/carrito');
        echo view('plantillas/footer');
    }

    public function agregarCarrito() {
        $cart = \Config\Services::cart();
        $request = \Config\Services::request();

        $data = array(
            'id' => $request->getPost('id'),
            'name' => $request->getPost('nombre'),
            'price' => $request->getPost('precio'),
            'qty' => 1,
        );
        $cart->insert($data);
        return redirect()->to('productos')->with('MensajeProducto', 'Producto agregado al carrito!');
    }

    public function eliminarProductoCarrito($idrow = null) {
        $cart = \Config\Services::cart();
        $cart->remove($idrow);
        return redirect()->route('carrito');
    }

    public function vaciarCarrito() {
        $cart = \Config\Services::cart();
        $cart->destroy();
        return redirect()->route('carrito');
    }


}
