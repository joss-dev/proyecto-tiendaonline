<div class="container-fluid bg-oscuro p-0">
    <h1 class="text-center text-white py-5">Detalles de tus compras</h1>
    <table class="table table-hover mb-0">
        <thead>
            <tr class="table-dark">
                <th scope="col">Producto</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Fecha de la compra</th>
                <th scope="col">Precio unitario</th>
                <th scope="col">Total</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php $totalCompras = 0?>
            <?php foreach ($venta as $row) { ?>
                <tr class="table-dark">
                    <td><?= $row['producto_nombre']; ?></td>
                    <td><?= $row['detalle_cantidad']; ?></td>
                    <td><?= $row['venta_fecha']; ?></td>
                    <td>$ <?= number_format($row['producto_precio'], 0, ',', '.'); ?></td>
                    <td> $ <?= number_format($row['detalle_precio'] * $row['detalle_cantidad'], 0, ',', '.'); ?></td>
                    <?php $totalCompras +=  $row['detalle_precio'] * $row['detalle_cantidad']?>
                </tr>
            <?php } ?>
            <tr class="table-dark">
                <td></td>
                <td></td>
                <td></td>
                <td class="fw-bold text-white">Gasto total:</td>
                <td class="fw-bold text-white">$ <?= number_format($totalCompras, 0, ',', '.'); ?></td>
            </tr>
        </tbody>
    </table>
</div>