<div class="container-fluid bg-oscuro p-0">
    <h1 class="text-center text-white py-5">Gestion de productos</h1>
    <?php if (session()->getFlashdata('MensajeProducto')) { ?>
            <div class='alert alert-success alert-dismissible fade show text-center py-3 my-3' role='alert' id='mensaje'>
                <?= session()->getFlashdata('MensajeProducto'); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php } ?>
    <table class="table table-hover mb-0">
        <thead>
            <tr class="table-dark">
                <th scope="col">#ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Correo</th>
                <th scope="col">Mensaje</th>
                <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php foreach ($consultas as $row) { ?>
                    <tr class="table-dark">
                        <th scope="row"><?= $row['id_consulta']; ?></th>
                        <td><?= $row['consulta_nombre']; ?></td>
                        <td><?= $row['consulta_correo']; ?></td>
                        <td><?= $row['consulta_mensaje']; ?></td>
                        <td>
                            <a href="<?php echo base_url('/'.$row['id_consulta']);?>" class="btn btn-info">Respondido</a>
                        </td>
                    </tr>
            <?php } ?>
        </tbody>
    </table>
</div>