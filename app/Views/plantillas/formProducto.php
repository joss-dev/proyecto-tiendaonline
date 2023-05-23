<div class="container p-4">
    <h1>Dar de alta productos</h1>
    <form class="row g-3">
        <div class="col-md-6">
            <label for="nombreProducto" class="form-label">Nombre</label>
            <input type="text" name="nombreProducto" placeholder="Nombre del producto" class="form-control" id="inputText4">
        </div>
        <div class="col-md-6">
            <label for="marcaProducto" class="form-label">Marca</label>
            <input type="text" name="marcaProducto" placeholder="Marca del producto" class="form-control" id="inputText4">
        </div>
        <div class="col-12">
            <label for="descripcionProducto" class="form-label">Descripcion del producto</label>
            <input type="text" name="descripcionProducto" placeholder="Descripcion de producto" class="form-control" id="inputText4">
        </div>
        <div class="col-md-4">
            <label for="precioProducto" class="form-label">Precio del producto</label>
            <input type="text" name="precioProducto" placeholder="Precio del producto" class="form-control" id="inputText4">
        </div>
        <div class="col-md-6">
            <label for="imagenProducto"  class="form-label">Imagenes</label>
            <input class="form-control" name="imagenProducto" type="file" id="formFile">
        </div>
        <div class="col-md-4">
            <label for="inputState" class="form-label">State</label>
            <select id="inputState" class="form-select">
                <option selected>Choose...</option>
                <option>...</option>
            </select>
        </div>
        <div class="col-md-2">
            <label for="inputZip" class="form-label">Zip</label>
            <input type="text" class="form-control" id="inputZip">
        </div>
        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Check me out
                </label>
            </div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Sign in</button>
        </div>
    </form>
</div>