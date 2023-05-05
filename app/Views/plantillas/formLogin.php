<div class="container mt-5 mb-5">
    <h1 class="text-center">Iniciar Sesión</h1>
    <?php echo form_open('login'); ?>
    <div class="mb-3">
        <label for="exampleInputEmail1" for="correo" class="form-label">Correo electrónico</label>
        <input type="email" name="correo" class="form-control border border-dark" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su correo">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword" for="contraseña" class="form-label">Contraseña</label>
        <input type="password" name="contraseña" class="form-control border border-dark" id="inputPassword" aria-describedby="emailHelp" placeholder="Ingrese su contraseña">
    </div>
    <?php echo form_submit('login', 'Iniciar Sesión', "class='btn btn-success'");?>
</div>
<?php form_close(); ?>
</div>