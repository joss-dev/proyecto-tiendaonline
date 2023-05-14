<div class="container-fluid row">
    <div class="col-md-6 text-center mt-5">
        <h4 class="fw-bold">Datos de Contacto</h4>
        <ul class="mt-3">
            <li class="mt-4">
                <h6>Email: <a href="#" class="text-secondary">tecnophone@gmail.com</a></h6>
            </li>
            <li class="mt-4">
                <h6>Telefono: <a href="#" class="text-secondary">3794551245</a></h6>
            </li>
            <li class="mt-4">
                <h6>Nuestro Local: <a href="https://goo.gl/maps/BWHiZUBJtDnHqtoMA" target="_blank" class="text-secondary">Av. Independencia 2345</a></h6>
                <p>(De lunes a sabados de 8hs a 20hs.)</p>
            </li>
            <h6>Nuestras redes sociales:</h6>
            <li class="mt-4">
                <h6>Facebook: <a href="https://facebook.com" class="text-secondary" target="_blank">TecnoPhone</a></h6>
            </li>
            <li class="mt-4">
                <h6>Instagram: <a href="https://instagram.com" class="text-secondary" target="_blank">TecnoPhone</a></h6>
            </li>
            <li class="mt-4">
                <h6>Whatsapp: <a href="https://web.whatsapp.com/" class="text-secondary" target="_blank">WhatsappTecnoPhone</a></h6>
            </li>
        </ul>
    </div>
    <div class="col-md-6 mt-5">
        <h4 class="text-center fw-bold">Formulario de Contacto</h4>
        <?php $validation = \Config\Services::validation(); ?>
        <form class="m-5" action="<?php echo base_url('consulta') ?>" method="POST">
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
                <label for="exampleInputEmail1" for="correo" class="form-label">Correo electrónico</label>
                <input type="email" name="correo" class="form-control border border-dark" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su correo">
                <?php if ($validation->getError('correo')) { ?>
                    <div class='alert alert-danger mt-2'>
                        <?= $error = $validation->getError('correo'); ?>
                    </div>
                <?php } ?>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" for="mensaje" class="form-label">Mensaje</label>
                <textarea class="form-control border border-dark" name="mensaje" id="exampleFormControlTextarea1" rows="3" maxlength="50" placeholder="Escriba aquí su mensaje"></textarea>
                <?php if ($validation->getError('mensaje')) { ?>
                    <div class='alert alert-danger mt-2'>
                        <?= $error = $validation->getError('mensaje'); ?>
                    </div>
                <?php } ?>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</div>