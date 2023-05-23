<div class="container p-4">
    <h1>Dar de alta productos</h1>
    <?php echo form_open_multipart('cargarProducto') ?> 
        <div class="row">
        <div class="col-md-6">
            <label for="nombreProducto" class="form-label">Nombre</label>
            <input type="text" name="nombreProducto" placeholder="Nombre del producto" class="form-control" id="inputText4">
        </div>
        <div class="col-md-6">
            <label for="">Seleccione la marca</label>
            <select name="marcas" id="">
                <option value="">Seleccionar Marca</option>
                <?php foreach($marca as $marcas):?> 
                    <option value="<?php $marca->id_marca?>"><?php $marca->marca_nombre ?></option>
                <?php endforeach?>
            </select>
        </div>
        <div class="col-12">
            <label for="descripcionProducto" class="form-label">Descripcion del producto</label>
            <input type="text" name="descripcionProducto" placeholder="Descripcion de producto" class="form-control" id="inputText4">
        </div>
        <div class="col-md-4">
            <label for="precioProducto" class="form-label">Precio del producto</label>
            <input type="text" name="precioProducto" placeholder="Precio del producto" class="form-control" id="inputText4">
        </div>
        <div class="col-md-4">
            <label for="stockProducto" class="form-label">Stock</label>
            <input type="text" name="stockProducto" placeholder="Stock" class="form-control" id="inputText4">
        </div>
        <div class="col-md-6">
            <label for="imagenProducto" class="form-label">Imagen</label>
            <input class="form-control" name="imagenProducto" type="file" id="formFile">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Cargar</button>
        </div>
        </div>
    <?php form_close(); ?>
</div>