<div class="container my-5">
    <div class="row">
        <div class="col-md-6 text-center border border-2 rounded-4 ">
            <img src="<?php echo base_url('public/img/ejemplos/' . $producto['producto_imagen']); ?>" alt="<?= $producto['producto_nombre'] ?>" class="img-fluid">
        </div>
        <div class="col-md-6">
            <h1 class="my-5"><?= $producto['producto_nombre'] ?></h1>
            <p class="lead fw-bold my-5"> $ <?= number_format($producto['producto_precio'], 0, ',', '.'); ?></p>
            <p class="my-5">Disponibles: <?= $producto['producto_stock'] ?></p>
            <?php if (session()->login) { ?>
                <?php if (session()->perfil == 1) { ?>
                    <a href="" class="btn btn-primary card-button mt-4 mx-1">Comprar</a>
                <?php } else { ?>
                    <?php echo form_open('add_cart');
                    echo form_hidden('id', $producto['id_producto']);
                    echo form_hidden('nombre', $producto['producto_nombre']);
                    echo form_hidden('precio', $producto['producto_precio']);
                    ?>
                    <button class="btn btn-primary card-button mt-4 mx-1">Comprar</button>
                    <?php echo form_close(); ?>
                    <a href="<?php echo base_url('productos'); ?>" class="btn btn-primary card-button mt-4 mx-1">Comprar</a>
                <?php } ?>
            <?php } else { ?>
                <a href="<?php echo base_url('loginUsuario'); ?>" class="btn btn-primary card-button mt-4 mx-1">Comprar</a>
            <?php } ?>
        </div>
        <div class="mt-5 p-3 border border-2 rounded-4  ">
            <p>Descripción del producto : </p>
            <p> <?= $producto['producto_descripcion'] ?></p>
        </div>
    </div>
</div>