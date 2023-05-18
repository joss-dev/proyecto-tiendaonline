<div class="container mt-5 mb-5">
    
    <h1 class="text-center">Registrarse</h1>
    <?php echo form_open('registro'); ?>
    <?php $validation = \Config\Services::validation(); ?>
    <div class="mb-3">
        <label for="exampleInputText" for="nombre" class="form-label">Nombre</label>
        <input type="text" name="nombre" class="form-control border border-dark" id="exampleInputText" aria-describedby="emailHelp" placeholder="Ingrese su nombre">
        <?php if ($validation->getError('nombre')) { ?>
            <div class='alert alert-danger mt-2'>
                <?= $error = $validation->getError('nombre'); ?>
            </div>
        <?php } ?>
    </div>
    <div class="mb-3">
        <label for="exampleInputText" for="apellido" class="form-label">Apellido</label>
        <input type="text" name="apellido" class="form-control border border-dark" id="exampleInputText" aria-describedby="emailHelp" placeholder="Ingrese su Apellido">
        <?php if ($validation->getError('apellido')) { ?>
            <div class='alert alert-danger mt-2'>
                <?= $error = $validation->getError('apellido'); ?>
            </div>
        <?php } ?>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" for="correo" class="form-label">Correo electrónico</label>
        <input type="email" name="correo" class="form-control border border-dark" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su correo">
        <?php if ($validation->getError('correo')) { ?>
            <div class='alert alert-danger mt-2'>
                <?= $error = $validation->getError('correo'); ?>
            </div>
        <?php } ?>
    </div>
    <div class="mb-3">
        <label for="telefono" class="form-label">Telefono</label>
        <input type="tel" name="telefono" class="form-control border border-dark" id="exampleInputText" aria-describedby="telHelp" placeholder="Ingrese su telefono">
        <?php if ($validation->getError('telefono')) { ?>
            <div class='alert alert-danger mt-2'>
                <?= $error = $validation->getError('telefono'); ?>
            </div>
        <?php } ?>
    </div>
    <div class="mb-3">
        <label for="exampleInputText" for="dni" class="form-label">Dni (Sin puntos)</label>
        <input type="numeric" name="dni" class="form-control border border-dark" id="exampleInputNumeric" aria-describedby="numericHelp" placeholder="Ingrese su dni">
        <?php if ($validation->getError('dni')) { ?>
            <div class='alert alert-danger mt-2'>
                <?= $error = $validation->getError('dni'); ?>
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
    <div class="mb-3">
        <label for="exampleInputPassword" for="repass" class="form-label">Repetir la contraseña</label>
        <input type="password" name="repass" class="form-control border border-dark" id="inputPassword" aria-describedby="emailHelp" placeholder="Repetir su contraseña">
        <?php if ($validation->getError('repass')) { ?>
            <div class='alert alert-danger mt-2'>
                <?= $error = $validation->getError('repass'); ?>
            </div>
        <?php } ?>
    </div>
    <?php echo form_submit('Registrarme', 'Registrarme', "class='btn btn-outline-success'"); ?>
</div>
<?php form_close(); ?>
</div>