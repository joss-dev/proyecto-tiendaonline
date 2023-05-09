<div class="container mt-5 mb-5">
    <h1 class="text-center">Registrarse</h1>
    <?php echo form_open('registro'); ?>
    <div class="mb-3">
        <label for="exampleInputText" for="nombre" class="form-label">Nombre</label>
        <input type="text" name="nombre" class="form-control border border-dark" id="exampleInputText" aria-describedby="emailHelp" placeholder="Ingrese su nombre">
    </div>
    <div class="mb-3">
        <label for="exampleInputText" for="apellido" class="form-label">Apellido</label>
        <input type="text" name="apellido" class="form-control border border-dark" id="exampleInputText" aria-describedby="emailHelp" placeholder="Ingrese su Apellido">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" for="correo" class="form-label">Correo electrónico</label>
        <input type="email" name="correo" class="form-control border border-dark" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su correo">
    </div>
    <div class="mb-3">
        <label for="exampleInputText" for="correo" class="form-label">Telefono</label>
        <input type="tel" name="telefono" class="form-control border border-dark" id="exampleInputText" aria-describedby="telHelp" placeholder="Ingrese su telefono">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword" for="pass" class="form-label">Contraseña</label>
        <input type="password" name="pass" class="form-control border border-dark" id="inputPassword" aria-describedby="emailHelp" placeholder="Ingrese su contraseña">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword" for="repass" class="form-label">Repetir la contraseña</label>
        <input type="password" name="repass" class="form-control border border-dark" id="inputPassword" aria-describedby="emailHelp" placeholder="Repetir su contraseña">
    </div>
    <?php echo form_submit('Registrarme', 'Registrarme', "class='btn btn-outline-success'");?>
</div>
<?php form_close(); ?>
</div>