<nav class="navbar navbar-light navbar-expand-lg" style="background-color: #03001c;">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="<?php echo base_url(''); ?>">
                <img src="./public/img/icon.png" alt="" width="50" height="60">
                Tecno Phone
            </a>
            <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php $session = session(); ?>
                <ul class="navbar-nav mx-6 mb-3 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="<?php echo base_url('admin'); ?>">Consultas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?php echo base_url('admin'); ?>">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?php echo base_url('admin'); ?>">Ventas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?php echo base_url('formProducto'); ?>">Registrar Producto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?php echo base_url('admin'); ?>">Gestionar Productos</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control mx-4" type="search" placeholder="Buscar" aria-label="Buscar">
                    <button class="btn btn-outline-light" type="submit">Buscar</button>
                </form>
            </div>
            <?php if (session('login')) { ?>
                <ul class="d-flex">
                    <li class="nav-item pt-4 text-center mx-4">
                        <a class="text-white" href="<?php echo base_url('perfil'); ?>">
                            <img class="efecto-opacidad" src="./public/img/icons/usuario.png" alt="" width="30" height="30">
                        </a>
                        <a href="<?php echo base_url('perfil'); ?>" class="d-block pt-3 text-white"><?= $session->get('nombre'); ?></a>
                    </li>
                    <li class="mx-2">
                        <a href="<?php echo base_url('cerrarSesion'); ?>" class="btn btn-outline-danger mt-4 mx-2 display-none"><i class="bi bi-box-arrow-right"></i> Salir</i></a>
                    </li>
                </ul>
            <?php } else { ?>
                <ul class="d-flex">
                    <li class="nav-item p-4 ">
                        <a class="" href="<?php echo base_url('loginUsuario'); ?>">
                            <img class="efecto-opacidad" src="./public/img/icons/carrito.png" alt="" width="30" height="30">
                        </a>
                    </li>
                    <li class="nav-item p-4 text-center">
                        <a class="text-white" href="<?php echo base_url('loginUsuario'); ?>">
                            <img class="efecto-opacidad" src="./public/img/icons/usuario.png" alt="" width="30" height="30">
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