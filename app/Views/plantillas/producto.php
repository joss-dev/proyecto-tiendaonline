<div class="container my-5">
    <div class="row">
        <div class="col-md-6 text-center border border-2 rounded-4 ">
            <img src="<?php echo base_url('public/img/ejemplos/' . $producto['producto_imagen']); ?>" alt="<?= $producto['producto_nombre'] ?>" class="img-fluid">
        </div>  
        <div class="col-md-6">
            <h1 class="my-5"><?= $producto['producto_nombre'] ?></h1>
            <p class="lead fw-bold my-5"> $ <?= number_format($producto['producto_precio'], 0, ',', '.'); ?></p>
            <p class="my-5">Disponibles: <?= $producto['producto_stock'] ?></p>
            <a href="#" class="btn btn-primary my-3">Comprar</a>
        </div>
        <div class="mt-5 p-3 border border-2 rounded-4  ">
            <p>Descripción del producto : </p>
            <p> <?= $producto['producto_descripcion'] ?></p>
        </div>
    </div>
</div>  