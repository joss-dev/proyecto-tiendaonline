<nav class="navbar navbar-light navbar-expand-lg" style="background-color: #03001c;">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="<?php echo base_url('admin'); ?>">
            <img src="<?php echo base_url('/public/img/favicon.png'); ?>" alt="" width="50" height="60">
            Tecno Phone
        </a>
        <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php $session = session(); ?>
            <ul class="navbar-nav mx-6 mb-3 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="<?php echo base_url('consultasAdmin'); ?>">Consultas</a>
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
                    <a class="nav-link text-white" href="<?php echo base_url('ventas'); ?>">Ventas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?php echo base_url('formProducto'); ?>">Registrar Producto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?php echo base_url('gestionProductos'); ?>">Gestionar Productos</a>
                </li>
            </ul>
        </div>
        <?php if (session('login')) { ?>
            <ul class="d-flex">
                <li class="nav-item pt-4 text-center mx-5">
                    <a class="text-white " href="<?php echo base_url('perfil'); ?>">
                        <i class="bi bi-person-circle text-white efecto-opacidad  d-block" style="font-size: 30px;"></i>
                    </a>
                    <a href="<?php echo base_url('perfil'); ?>" class="d-block pt-1 text-white"><?= $session->get('nombre'); ?></a>
                </li>
                <li class="mx-2 mt-3">
                    <a href="<?php echo base_url('cerrarSesion'); ?>" class="btn btn-outline-danger mt-4 mx-2 display-none"><i class="bi bi-box-arrow-right"></i> Cerrar Sesión</i></a>
                </li>
            </ul>
        <?php } else { ?>
            <ul class="d-flex">
                <li class="nav-item p-4 text-center">
                    <a class="text-white" href="<?php echo base_url('loginUsuario'); ?>">
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