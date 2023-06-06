<div class="container p-4">
    <h1 class="my-4">Editar producto</h1>
    <?php $validation = \Config\Services::validation(); ?>
    <?php if (session()->getFlashdata('MensajeProducto')) { ?>
        <div class='alert alert-success alert-dismissible fade show text-center py-3 my-3' role='alert' id='mensaje'>
            <?= session()->getFlashdata('MensajeProducto'); ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php } ?>
    <?php echo form_open_multipart('/Producto_controller/actualizarProducto') ?>
    <div class="row gy-4">
        <div class="col-md-6">
            <label for="nombreProducto" class="form-label">Nombre</label>
            <input type="text" name="nombreProducto" placeholder="Nombre del producto" value="<?= $producto['producto_nombre']; ?>" class="form-control" id="inputText4">
            <?php if ($validation->getError('nombreProducto')) { ?>
                <div class='alert alert-danger mt-2'>
                    <?= $error = $validation->getError('nombreProducto'); ?>
                </div>
            <?php } ?>
        </div>
        <div class="col-md-6">
            <label for="marcaProducto" class="mb-2">Seleccione la marca</label>
            <?php
            $lista['0'] = 'Seleccione una marca';
            foreach ($marcas as $row) {
                $lista[$row['id_marca']] = $row['marca_nombre'];
            }
            $sel = $producto['producto_marca'];
            echo form_dropdown('marcaProducto', $lista, $sel, 'class="form-control"');
            ?>
        </div>
        <div class="col-12">
            <label for="exampleFormControlTextarea1" for="descripcionProducto" class="form-label">Descripcion del producto</label>
            <textarea class="form-control border border-dark" value="" name="descripcionProducto" id="exampleFormControlTextarea1" rows="3" maxlength="1000" placeholder="Descripción del producto"><?= $producto['producto_descripcion']; ?></textarea>
            <?php if ($validation->getError('descripcionProducto')) { ?>
                <div class='alert alert-danger mt-2'>
                    <?= $error = $validation->getError('descripcionProducto'); ?>
                </div>
            <?php } ?>
        </div>
        <div class="col-md-4 input-group">
            <label for="precioProducto" class="input-group form-label">Precio del producto</label>
            <span class="input-group-text">$</span>
            <input type="text" name="precioProducto" id="precioProducto" placeholder="Precio del producto" value="<?= number_format($producto['producto_precio'], 0, ',', '.');  ?>" class="form-control" id="inputText4">
            <?php if ($validation->getError('precioProducto')) { ?>
                <div class='alert alert-danger mt-2'>
                    <?= $error = $validation->getError('precioProducto'); ?>
                </div>
            <?php } ?>
        </div>
        <div class="col-md-4">
            <label for="stockProducto" class="form-label">Stock</label>
            <input type="number" name="stockProducto" placeholder="Stock" value="<?= $producto['producto_stock']; ?>" class="form-control" id="inputText4">
            <?php if ($validation->getError('stockProducto')) { ?>
                <div class='alert alert-danger mt-2'>
                    <?= $error = $validation->getError('stockProducto'); ?>
                </div>
            <?php } ?>
        </div>
        <div class="col-md-6">
            <label for="imagenProducto" class="form-label d-block">Imagen</label>
            <input class="form-control" name="imagenProducto" type="file" id="formFile">
            <img class="m-5" src="<?php echo base_url('/public/img/ejemplos/' . $producto['producto_imagen']); ?>" width="100" height="100" alt="">
            <?php if ($validation->getError('imagenProducto')) { ?>
                <div class='alert alert-danger mt-2'>
                    <?= $error = $validation->getError('imagenProducto'); ?>
                </div>
            <?php } ?>
        </div>
        <?php echo form_hidden('id_producto', $producto['id_producto']); ?>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>
    </div>
    <?php form_close(); ?>
</div>