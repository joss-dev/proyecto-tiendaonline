<header>
    <!-- barra de navegacion -->
    <?php $cart = \Config\Services::cart(); ?>
    

    <nav class="navbar navbar-light navbar-expand-lg" style="background-color: #03001c;">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="<?php echo base_url(''); ?>">
                <img src="<?php echo base_url('/public/img/icon.png'); ?>" alt="" width="50" height="60">
                Tecno Phone
            </a>
            <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php $session = session(); ?>
                <ul class="navbar-nav mx-6 mb-3 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="<?php echo base_url(''); ?>">Principal</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Productos</a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="<?php echo base_url('productos/all'); ?>">Todos los productos</a></li>
                            <?php foreach ($marcas as $row) { ?>
                                <li><a class="dropdown-item" href="<?php echo base_url('productos/' . $row['id_marca']) ?>"><?= $row['marca_nombre'] ?></a></li>
                            <?php } ?>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?php echo base_url('contacto'); ?>">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?php echo base_url('terminosYcondiciones'); ?>">Terminos y Usos</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            La empresa
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="<?php echo base_url('quienesSomos'); ?>">Quiénes somos</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url('comercializacion'); ?>">Comercialización</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control mx-4" type="search" placeholder="Buscar" aria-label="Buscar">
                    <button class="btn btn-outline-light" type="submit">Buscar</button>
                </form>
            </div>
            <?php if (session('login')) { ?>
                <ul class="d-flex">
                    <li class="nav-item p-4 ">
                        <a href="<?php echo base_url('carrito'); ?>">
                            <i class="bi bi-cart3 position-relative  text-white efecto-opacidad d-block" style="font-size: 30px;">
                                <span class="position-absolute translate-middle badge text-dark rounded-pill bg-light" style="font-size: 0.5em;">
                                    <?= $cart->totalitems(); ?>
                                </span>
                            </i>
                        </a>
                    </li>
                    <li class="nav-item pt-4 text-center">
                        <a class="text-white " href="<?php echo base_url('perfil'); ?>">
                            <i class="bi bi-person-circle text-white efecto-opacidad  d-block" style="font-size: 30px;"></i>
                        </a>
                        <a href="<?php echo base_url('perfil'); ?>" class="d-block pt-1 efecto-opacidad text-white"><?= $session->get('nombre'); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('cerrarSesion'); ?>" class="btn btn-outline-danger mt-4 mx-4 display-none"><i class="bi bi-box-arrow-right"></i> Salir</i></a>
                    </li>
                </ul>
            <?php } else { ?>
                <ul class="d-flex">
                    <li class="nav-item p-4">
                        <a class="" href="<?php echo base_url('loginUsuario'); ?>">
                            <i class="bi bi-cart3  text-white efecto-opacidad d-block" style="font-size: 30px;">
                                <span class="position-absolute translate-middle badge text-dark rounded-pill bg-light" style="font-size: 0.5em;">
                                    <?= $cart->totalitems(); ?>
                                </span>
                            </i>
                        </a>
                    </li>
                    <li class="nav-item p-4">
                        <a class="text-white " href="<?php echo base_url('loginUsuario'); ?>">
                            <i class="bi bi-person-circle text-white efecto-opacidad  d-block" style="font-size: 30px;"></i>
                        </a>
                    </li>
                </ul>
            <?php } ?>
        </div>
    </nav>
</header>
<?php if (session()->getFlashdata('Msg')) { ?>
    <div class='alert alert-success alert-dismissible fade show text-center py-3 my-3' role='alert' id='mensaje'>
        <?= session()->getFlashdata('Msg'); ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php } ?>