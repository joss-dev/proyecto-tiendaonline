<?php

namespace Config;

use CodeIgniter\Commands\Utilities\Routes;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

//views general
$routes->get('/', 'Home::index');
$routes->get('quienesSomos', 'Home::quienesSomos');
$routes->get('productos/(:any)', 'Home::productos/$1');
$routes->get('terminosYcondiciones', 'Home::terminosYcondiciones');
$routes->get('contacto', 'Home::contacto');
$routes->get('comercializacion', 'Home::comercializacion');
$routes->get('perfil', 'Home::perfil');


//registro y login
$routes->get('loginUsuario', 'User_controller::login_view');
$routes->get('registrarse', 'User_controller::registrarse');
$routes->post('registro', 'User_controller::registrar_usuario');
$routes->post('login', 'User_controller::login_usuario');
$routes->get('cerrarSesion', 'User_controller::cerrar_sesion');

//gestion productos
$routes->get('producto/(:num)', 'Producto_controller::verProducto/$1');
$routes->post('registrarProducto', 'Admin_controller::registrar_producto');
$routes->post('/Producto_controller/actualizarProducto', 'Producto_controller::actualizarProducto');
$routes->get('Producto_controller/eliminarProducto/(:num)', 'Producto_controller::eliminarProducto/$1');
$routes->get('Producto_controller/activarProducto/(:num)', 'Producto_controller::activarProducto/$1');
$routes->get('Producto_controller/editarProducto/(:num)', 'Producto_controller::editarProducto/$1');
$routes->get('formProducto', 'Admin_controller::formProducto');
$routes->get('admin', 'Admin_controller::admin_view');
$routes->get('gestionProductos', 'Producto_controller::gestion_view');

//consultas
$routes->post('consulta', 'User_controller::registrar_consulta');
$routes->get('consultasAdmin', 'Admin_controller::getConsultas');
$routes->get('consulta/(:num)', 'Admin_controller::contestadoConsulta/$1');

//carrito
$routes->get('carrito', 'Carrito_controller::verCarrito');
$routes->get('agregarProducto', 'Carrito_controller::agregarCarrito');
$routes->get('vaciarCarrito', 'Carrito_controller::vaciarCarrito');
$routes->post('add_cart', 'Carrito_controller::agregarCarrito');
$routes->get('eliminar_item/(:hash)', 'Carrito_controller::eliminarProductoCarrito/$1');
$routes->get('comprarCarrito/(:num)', 'Carrito_controller::guardarVenta/$1');

//ventas
$routes->get('ventas', 'Admin_controller::listarVentas');
$routes->get('verDetalle/(:num)', 'Admin_controller::verDetalle/$1');



/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
