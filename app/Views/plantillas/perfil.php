<?php $session = session(); ?>

<?php if (session('login')) { ?>
    <div class="container-fluid  bg-oscuro text-white">
        <h1 class="text-center mb-5 py-5">Bienvenido <?= $session->get('nombre'); ?> </h1>
        <div class="vstack gap-3 p-5">
            <h4>Tus datos personales: </h4>
            <div class="p-2 border">Nombre: <?= $session->get('nombre'); ?></div>
            <div class="p-2">Apellido: <?= $session->get('apellido'); ?></div>
            <div class="p-2">Correo Electronico: <?= $session->get('correo'); ?></div>
            <div class="p-2">Dni: <?= $session->get('dni'); ?></div>
            <div class="p-2">Telefono: <?= $session->get('telefono'); ?></div>
        </div>
        <button class="btn btn-outline-danger my-5"><i class="bi bi-box-arrow-right"></i> Cerrar Sesión</i></button>
    </div>
<?php } ?>