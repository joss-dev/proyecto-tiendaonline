<?php $session = session(); ?>
<?php if (session('login')) { ?>
    <div class="container-fluid">
        <h1 class="text-center mb-2 py-3">Bienvenido <?= $session->get('nombre'); ?> </h1>
        <ul class="vstack gap-3 p-5">
            <h4>Tus datos personales: </h4>
            <li class="p-2 border border-1 fondo-sombra"><strong> Nombre : </strong> <?= $session->get('nombre'); ?></li>
            <li class="p-2 border border-1 fondo-sombra"><strong> Apellido : </strong><?= $session->get('apellido'); ?></li>
            <li class="p-2 border border-1 fondo-sombra"><strong> Correo : </strong> <?= $session->get('correo'); ?></li>
            <li class="p-2 border border-1 fondo-sombra"><strong> Dni : </strong> <?= $session->get('dni'); ?></li>
            <li class="p-2 border border-1 fondo-sombra"><strong> Telefono : </strong><?= $session->get('telefono'); ?></li>
            <li>
            <a href="<?php echo base_url('cerrarSesion'); ?>" class="btn btn-outline-danger my-5"><i class="bi bi-box-arrow-right"></i> Cerrar Sesión</i></a>
            </li>
        </ul>
    </div>
<?php } ?>