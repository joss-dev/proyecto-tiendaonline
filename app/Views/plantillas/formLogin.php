<div class="container mt-5 mb-5">
    <h1 class="text-center">Iniciar Sesión</h1>
    <?php echo form_open('login'); ?>
    <?php $validation = \Config\Services::validation(); ?>
    <div class="mb-3">
        <label for="exampleInputEmail1" for="correo" class="form-label">Correo electrónico</label>
        <input type="email" name="correo" value="<?php echo set_value('correo'); ?>" class="form-control border border-dark" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su correo">
        <?php if ($validation->getError('correo')) { ?>
            <div class='alert alert-danger mt-2'>
                <?= $error = $validation->getError('correo'); ?>
            </div>
        <?php } ?>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword" for="pass" class="form-label">Contraseña</label>
        <input type="password" name="pass" class="form-control border border-dark" id="inputPassword" aria-describedby="emailHelp" placeholder="Ingrese su contraseña">
        <?php if ($validation->getError('pass')) { ?>
            <div class='alert alert-danger mt-2'>
                <?= $error = $validation->getError('pass'); ?>
            </div>
        <?php } ?>
    </div>
    <?php echo form_submit('login', 'Iniciar Sesión', "class='btn btn-success mb-4'"); ?>
    <div class="text-center">
        <h6 class="mb-3">¿ No tienes una cuenta ? Regístrate aqui en simples pasos.</h6>
        <a class="btn btn-info" href="<?php echo base_url('registrarse'); ?>">Registrarse</a>
    </div>
</div>
<?php form_close(); ?>
</div>