<header>
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
                        <a class="nav-link active text-white" aria-current="page" href="<?php echo base_url(''); ?>">Principal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?php echo base_url('productos'); ?>">Productos</a>
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
</header>