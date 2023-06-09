<div class="container d-flex justify-content-center p-2 my-5">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h1 class="text-center mb-3">Iniciar Sesión</h1>
            <?php echo form_open('login'); ?>
            <?php $validation = \Config\Services::validation(); ?>
            <?php if (session()->getFlashdata('mensajeVerif')) { ?>
                <div class='alert alert-danger alert-dismissible fade show text-center py-3 my-3' role='alert' id='mensaje'>
                    <?= session()->getFlashdata('mensajeVerif'); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php } ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" for="correo" class="form-label">Correo electrónico</label>
                <input type="email" name="correo" value="<?php echo set_value('correo'); ?>" class="form-control border border-dark " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su correo">
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
            <div class="text-center">
            <?php echo form_submit('login', 'Iniciar Sesión', "class='btn btn-success mb-4'"); ?>
            </div>
            <div class="text-center">
                <h6 class="mb-3">¿ No tienes una cuenta ? Regístrate aqui en simples pasos.</h6>
                <a class="btn btn-info" href="<?php echo base_url('registrarse'); ?>">Registrarse</a>
            </div>
            <?php form_close(); ?>
        </div>
    </div>
</div>