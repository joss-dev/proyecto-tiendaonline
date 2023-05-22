<?php $session = session(); ?>

<?php if(session('login')) { ?>
<div class="container text-center">
    <h1>Bienvenido <?= $session->get('nombre'); ?> </h1>
    
    <button class="btn btn-outline-danger"><i class="bi bi-box-arrow-right"></i> Cerrar Sesión</i></button>
</div>
<?php } ?>