<div class="container-fluid bg-oscuro p-0">
    <h1 class="text-center text-white py-5">Detalle de la venta</h1>
    <div class="text-white p-4">
        <p>Nombre y apellido: <?= $venta['usuario_nombre']," ",  $venta['usuario_apellido']?></p>
        <p>Correo: <?= $venta['usuario_correo'] ?></p>
        <p>Telefono: <?= $venta['usuario_telefono'] ?></p>
        <p>Dni: <?= $venta['usuario_dni'] ?></p>
        <p>Fecha de la venta: <?= $venta['venta_fecha'] ?></p>
        <p>Monto total: $ <?= number_format($venta['venta_total'], 0, ',', '.');?></p>        
    </div>
    <table class="table table-hover mb-0">
        <thead>
            <tr class="table-dark">
                <th scope="col">#ID</th>
                <th scope="col">Producto</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Monto</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php foreach ($detalle as $row) { ?>
                    <tr class="table-dark">
                        <th scope="row"><?= $row['id_venta']; ?></th>
                        <td><?= $row['producto_nombre']; ?></td>
                        <td><?= $row['detalle_cantidad']; ?></td>
                        <td> $ <?= number_format($row['detalle_precio'], 0, ',', '.'); ?></td>
                    </tr>
            <?php } ?>
        </tbody>
    </table>
</div>