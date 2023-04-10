<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TecnoPhone</title>
    <link rel="shortcut icon" href="./public/img/favicon.png">

    <!-- estilos css -->
    <link rel="stylesheet" href="./public/css/myStyle.css">
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
</head>

<body>
    <!-- barra de navegacion -->
    <nav class="navbar navbar-light navbar-expand-lg" style="background-color: #03001c;">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">
                <img src="./public/img/icon.png" alt="" width="50" height="60">
                Tecno Phone
            </a>
            <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mx-6 mb-3 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="#">Principal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Quienes Somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Terminos y Usos</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            La empresa
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Contacto</a></li>
                            <li><a class="dropdown-item" href="#">Comercialización</a></li>
                            <li><a class="dropdown-item" href="#">Consultas</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control mx-4" type="search" placeholder="Buscar" aria-label="Buscar">
                    <button class="btn btn-outline-light" type="submit">Buscar</button>
                </form>
            </div>
            <ul class="navbar-bar d-flex flex-row flex-wrap">
                <li class="nav-item col-6 col-md-6 p-4">
                    <a class="" href="#">
                        <img src="./public/img/icons/carrito.png" alt="" width="30" height="30">
                    </a>
                </li>
                <li class="nav-item col-6 col-md-6 p-4">
                    <a class="" href="#">
                        <img src="./public/img/icons/usuario.png" alt="" width="30" height="30">
                    </a>
                </li>
            </ul>
        </div>
    </nav>


    <div class="container bg-light p-2 my-5 ">
        <h2 class="text-center m-5">Productos Destacados</h2>
        <ul class="row">
            <li class="col d-flex justify-content-center">
                <div class="card text-center" style="width: 18rem;">
                    <img src="./public/img/ejemplos/iphone14.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Iphone 14 Pro Max 128GB</h5>
                        <span class="d-block">$ 450.456</span>
                        <a href="#" class="btn btn-primary my-2">Comprar</a>
                    </div>
                </div>
            </li>
            <li class="col d-flex justify-content-center">
                <div class="card text-center" style="width: 18rem;">
                    <img src="./public/img/ejemplos/samsungs23.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Samsung S23 Ultra 128GB</h5>
                        <span class="d-block">$ 350.422</span>
                        <a href="#" class="btn btn-primary my-2">Comprar</a>
                    </div>
                </div>
            </li>
            <li class="col d-flex justify-content-center">
                <div class="card text-center" style="width: 18rem;">
                    <img src="./public/img/ejemplos/iphone12.jpg" class="card-img-top" width="286" height="286" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Iphone 12 Pro Max 60GB</h5>
                        <span class="d-block">$ 250.800</span>
                        <a href="#" class="btn btn-primary my-2">Comprar</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>

    <div class="container bg-light p-2 my-5">
        <h2 class="text-center m-5">Nuevos Ingresos</h2>
        <ul class="row">
            <li class="col d-flex justify-content-center">
                <div class="card text-center " style="width: 18rem;">
                    <img src="./public/img/ejemplos/iphone14.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Iphone 14 Pro Max 128GB</h5>
                        <span class="d-block">$ 450.456</span>
                        <a href="#" class="btn btn-primary my-2">Comprar</a>
                    </div>
                </div>
            </li>
            <li class="col d-flex justify-content-center">
                <div class="card text-center" style="width: 18rem;">
                    <img src="./public/img/ejemplos/samsungs23.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Samsung S23 Ultra 128GB</h5>
                        <span class="d-block">$ 350.422</span>
                        <a href="#" class="btn btn-primary my-2">Comprar</a>
                    </div>
                </div>
            </li>
            <li class="col d-flex justify-content-center">
                <div class="card text-center" style="width: 18rem;">
                    <img src="./public/img/ejemplos/iphone12.jpg" class="card-img-top" width="286" height="286" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Iphone 12 Pro Max 60GB</h5>
                        <span class="d-block">$ 250.800</span>
                        <a href="#" class="btn btn-primary my-2">Comprar</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>

    <!-- final de pagina -->
    <footer class="text-center text-white pt-3" style="background-color: #03001c;">
        <ul class="row m-0">
            <li class="col-sm-12 col-lg-4 mb-5">
                <h4 class="titulo-footer">Tecno Phone</h4>
                <ul class="m-3">
                    <li class="p-2">
                        <a href="#" class="text-white">Productos</a>
                    </li>
                    <li class="p-2">
                        <a href="#" class="text-white">Quienes somos</a>
                    </li>
                    <li class="p-2">
                        <a href="#" class="text-white">Terminos y usos</a>
                    </li>
                    <li class="p-2">
                        <a href="#" class="text-white">Consultas frecuentes</a>
                    </li>
                </ul>
            </li>
            <li class="col-sm-12 col-lg-4 mb-5">
                <h4 class="titulo-footer">Contacto</h4>
                <ul class="m-3">
                    <li class="p-2">
                        <a href="#" class="text-white">
                            <img src="./public/img/icons/icon-email.png" alt="" width="40" height="40">
                            tecnophone@gmail.com
                        </a>
                    </li>
                    <li class="p-2">
                        <a href="#" class="text-white">
                            <img src="./public/img/icons/icon-telefono.png" alt="" width="40" height="40">
                            3794551245
                        </a>
                    </li>
                    <li class="p-2">
                        <a href="#" class="text-white">
                            <img src="./public/img/icons/icon-map.png" alt="" width="40" height="40">
                            Av. Independencia 2345
                        </a>
                    </li>
                </ul>
            </li>
            <li class="col-sm-12 col-lg-4 mb-5">
                <h4 class="titulo-footer">Redes Sociales</h4>
                <ul class="m-3">
                    <li class="p-2">
                        <a href="#" class="text-white">
                            <img src="./public/img/icons/icon-facebook.png" alt="" width="50" height="50">
                            Facebook
                        </a>
                    </li>
                    <li class="p-2">
                        <a href="#" class="text-white">
                            <img src="./public/img/icons/icon-whatsapp.png" alt="" width="45" height="45">
                            Whatsapp
                        </a>
                    </li>
                    <li class="p-2">
                        <a href="#" class="text-white">
                            <img src="./public/img/icons/icon-instagram.png" alt="" width="45" height="45">
                            Instagram
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>

</html>