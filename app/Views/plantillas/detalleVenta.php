<div class="container-fluid bg-oscuro p-0">
    <h1 class="text-center text-white py-5">Detalle de la venta</h1>
    <div class="text-white p-4">
        <p>Nombre y apellido: <strong><?= $venta['usuario_nombre'], " ",  $venta['usuario_apellido'] ?></strong></p>
        <p>Correo: <strong><?= $venta['usuario_correo'] ?></strong></p>
        <p>Telefono: <strong> <?= $venta['usuario_telefono'] ?></strong></p>
        <p>Dni: <strong> <?= $venta['usuario_dni'] ?></strong></p>
        <p>Fecha de la venta: <strong> <?= $venta['venta_fecha'] ?> </strong></p>
    </div>
    <table class="table table-hover mb-0">
        <thead>
            <tr class="table-dark">
                <th scope="col">#ID</th>
                <th scope="col">Producto</th>
                <th scope="col">Precio Unitario</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Subtotal</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php foreach ($detalle as $row) { ?>
                <tr class="table-dark">
                    <th scope="row"><?= $row['id_venta']; ?></th>
                    <td><?= $row['producto_nombre']; ?></td>
                    <td>$ <?= number_format($row['producto_precio'], 0, ',', '.'); ?></td>
                    <td><?= $row['detalle_cantidad']; ?></td>
                    <td> $ <?= number_format($row['detalle_precio'], 0, ',', '.'); ?></td>
                </tr>
            <?php } ?>
            <tr class="table-dark">
                <td></td>
                <td></td>
                <td></td>
                <td class="fw-bold text-white">Monto total:</td>
                <td class="fw-bold text-white">$ <?= number_format($venta['venta_total'], 0, ',', '.'); ?></td>
            </tr>
        </tbody>
    </table>
</div>