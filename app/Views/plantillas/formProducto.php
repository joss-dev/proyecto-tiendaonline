<div class="container p-4">
    <h1 class="my-4">Dar de alta productos</h1>
    <?php $validation = \Config\Services::validation(); ?>
        <?php if (session()->getFlashdata('MensajeProducto')) { ?>
            <div class='alert alert-success alert-dismissible fade show text-center py-3 my-3' role='alert' id='mensaje'>
                <?= session()->getFlashdata('MensajeProducto'); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php } ?>
    <?php echo form_open_multipart('registrarProducto') ?> 
        <div class="row gy-4">
        <div class="col-md-6">
            <label for="nombreProducto" class="form-label">Nombre</label>
            <input type="text" name="nombreProducto" placeholder="Nombre del producto" value="<?php echo set_value('nombreProducto'); ?>" class="form-control" id="inputText4">
            <?php if ($validation->getError('nombreProducto')) { ?>
                    <div class='alert alert-danger mt-2'>
                        <?= $error = $validation->getError('nombreProducto'); ?>
                    </div>
            <?php } ?>
        </div>
        <div class="col-md-6">
            <label for="marcaProducto" class="mb-2">Seleccione la marca</label>
            <select name="marcaProducto" class="form-select">
                <option value="">Seleccionar Marca</option>
                <?php foreach($marcas as $marca):?> 
                    <option class="text-black" value="<?= $marca['id_marca']; ?>"><?= $marca['marca_nombre']; ?></option>
                <?php endforeach?>
            </select>
            <?php if ($validation->getError('marcaProducto')) { ?>
                    <div class='alert alert-danger mt-2'>
                        <?= $error = $validation->getError('marcaProducto'); ?>
                    </div>
            <?php } ?>
        </div>
        <div class="col-12">
            <!-- <label for="descripcionProducto" class="form-label">Descripción del producto</label>
            <input type="text" name="descripcionProducto" placeholder="Descripción de producto" class="form-control" id="inputText4"> -->
            <label for="exampleFormControlTextarea1" for="descripcionProducto" class="form-label">Descripcion del producto</label>
            <textarea class="form-control border border-dark" value="<?php echo set_value('descripcionProducto'); ?>" name="descripcionProducto" id="exampleFormControlTextarea1" rows="3" maxlength="1000" placeholder="Descripción del producto"></textarea>
            <?php if ($validation->getError('descripcionProducto')) { ?>
                    <div class='alert alert-danger mt-2'>
                        <?= $error = $validation->getError('descripcionProducto'); ?>
                    </div>
            <?php } ?>
        </div>
        <div class="col-md-4 input-group">
            <label for="precioProducto" class="input-group form-label">Precio del producto</label>
            <span class="input-group-text">$</span>
            <input type="text" name="precioProducto" id="precioProducto" placeholder="Precio del producto" value="<?php echo set_value('precioProducto'); ?>" class="form-control" id="inputText4">
            <?php if ($validation->getError('precioProducto')) { ?>
                    <div class='alert alert-danger mt-2'>
                        <?= $error = $validation->getError('precioProducto'); ?>
                    </div>
            <?php } ?>
        </div>
        <div class="col-md-4">
            <label for="stockProducto" class="form-label">Stock</label>
            <input type="number" name="stockProducto" placeholder="Stock" value="<?php echo set_value('stockProducto'); ?>" class="form-control" id="inputText4">
            <?php if ($validation->getError('stockProducto')) { ?>
                    <div class='alert alert-danger mt-2'>
                        <?= $error = $validation->getError('stockProducto'); ?>
                    </div>
            <?php } ?>
        </div>
        <div class="col-md-6">
            <label for="imagenProducto" class="form-label">Imagen</label>
            <input class="form-control" name="imagenProducto"  type="file" id="formFile">
            <?php if ($validation->getError('imagenProducto')) { ?>
                    <div class='alert alert-danger mt-2'>
                        <?= $error = $validation->getError('imagenProducto'); ?>
                    </div>
            <?php } ?>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Cargar</button>
        </div>
        </div>
    <?php form_close(); ?>
</div>