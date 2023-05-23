<div class="container p-4">
    <h1>Dar de alta productos</h1>
    <form class="row g-3">
        <div class="col-md-6">
            <label for="nombreProducto" class="form-label">Nombre</label>
            <input type="text" name="nombreProducto" placeholder="Nombre del producto" class="form-control" id="inputText4">
        </div>
        <div class="col-md-6">
            <select class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
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
        <div class="col-md-6">
            <label for="imagenProducto" class="form-label">Imagen</label>
            <input class="form-control" name="imagenProducto" type="file" id="formFile">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Cargar</button>
        </div>
    </form>
</div>