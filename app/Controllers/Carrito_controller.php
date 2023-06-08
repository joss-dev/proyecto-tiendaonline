<?php

namespace App\Controllers;

use App\Models\Venta_model;
use App\Models\Detalle_venta_model;
use App\Models\Producto_model;

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
        return redirect()->to('productos/all')->with('MensajeProducto', 'Producto agregado al carrito!');
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

    public function guardarVenta($montoTotal = null) {
        $cart = \Config\Services::cart();
        $venta = new Venta_model();
        $detalle_venta = new Detalle_venta_model();
        $productos = new Producto_model();

        $cart1 = $cart->contents();
        foreach($cart1 as $item) {
            $producto = $productos->where('id_producto', $item['id'])->first();
            if($producto['producto_stock'] < $item['qty']) {
                return redirect()->route('carrito')->with('MensajeCompra', 'No tenemos stock suficiente');
            }
        }

        $data = array(
            'id_usuario' => session()->id,
            'venta_fecha' => date('Y-m-d'),
            'venta_total' => $montoTotal
            
        );
        $venta_id = $venta->insert($data);


        
        $cart1 = $cart->contents();

        foreach($cart1 as $item) { 
            
            $detalle = array(
                'id_venta' => $venta_id,
                'id_producto' => $item['id'],
                'detalle_cantidad' => $item['qty'],
                'detalle_precio' => $item['price']
            ); 

            $productos->where('id_producto', $item['id'])->set('producto_stock', 'producto_stock - ' . $item['qty'], false)->update();

            $detalle_venta->insert($detalle);
        }
        $cart->destroy();
        return redirect()->to('carrito')->with('MensajeCompra', 'Muchas gracias por tu compra!. Puedes encontrar los detalles de su compra en la seccion perfil');
    }


}
