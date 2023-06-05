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
                <th scope="col">Descripcion</th>
                <th scope="col">Precio</th>
                <th scope="col">Stock</th>
                <th scope="col">Marca</th>
                <th scope="col">Imagen</th>
                <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php foreach ($producto as $row) { ?>
                <?php if ($row['producto_estado'] == 1) { ?>
                    <tr class="table-dark">
                        <th scope="row"><?= $row['id_producto']; ?></th>
                        <td><?= $row['producto_nombre']; ?></td>
                        <td><?= $row['producto_descripcion']; ?></td>
                        <td>$ <?= number_format($row['producto_precio'], 0, ',', '.'); ?></td>
                        <td><?= $row['producto_stock']; ?></td>
                        <td><?= $row['marca_nombre']; ?></td>
                        <td><img src="<?php echo base_url('public/img/ejemplos/' . $row['producto_imagen']); ?>" width="100px" height="100px" alt=""></td>
                        <td>
                            <a href="<?php echo base_url('Producto_controller/editarProducto/' . $row['id_producto']); ?>" class="btn btn-info">Editar</a>
                            <a href="<?php echo base_url('Producto_controller/eliminarProducto/' . $row['id_producto']); ?>" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                <?php } else { ?>
                    <tr class="table-danger">
                        <th scope="row"><?= $row['id_producto']; ?></th>
                        <td><?= $row['producto_nombre']; ?></td>
                        <td><?= $row['producto_descripcion']; ?></td>
                        <td>$ <?= number_format($row['producto_precio'], 0, ',', '.'); ?></td>
                        <td><?= $row['producto_stock']; ?></td>
                        <td><?= $row['marca_nombre']; ?></td>
                        <td><img src="<?php echo base_url('public/img/ejemplos/' . $row['producto_imagen']); ?>" width="100px" height="100px" alt=""></td>
                        <td>
                            <a href="<?php echo base_url('Producto_controller/editarProducto/' . $row['id_producto']); ?>" class="btn btn-info">Editar</a>
                            <a href="<?php echo base_url('Producto_controller/activarProducto/' . $row['id_producto']); ?>" class="btn btn-success">Activar</a>
                        </td>
                    </tr>
                <?php } ?>
            <?php } ?>
        </tbody>
    </table>
</div>