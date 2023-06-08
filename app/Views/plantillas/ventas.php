<div class="container-fluid bg-oscuro p-0">
    <h1 class="text-center text-white py-5">Gestion de ventas</h1>
    <table class="table table-hover mb-0">
        <thead>
            <tr class="table-dark">
                <th scope="col">#ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Correo</th>
                <th scope="col">Fecha</th>

            </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php foreach ($ventas as $row) { ?>
                    <tr class="table-dark">
                        <th scope="row"><?= $row['id_venta']; ?></th>
                        <td><?= $row['usuario_nombre']; ?></td>
                        <td><?= $row['usuario_correo']; ?></td>
                        <td><?= $row['venta_fecha'] ?></td>
                    </tr>
            <?php } ?>
        </tbody>
    </table>
</div>