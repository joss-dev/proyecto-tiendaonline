<div class="container-fluid bg-propio p-5">
    <h2 class="text-center mb-5">Nuestros productos</h2>
    <ul class="row gy-5">
        <?php foreach ($productos as $row) { ?>
            <li class="col d-flex justify-content-center mx-3">
                <div class="card text-center p-2 card-hover" style="width: 18rem;">
                    <img src="<?php echo base_url('public/img/ejemplos/' . $row['producto_imagen']); ?>" class="card-img-top card-image" alt="...">
                    <div class="card-body mt-2">
                        <h5 class="card-title my-3 "><?= $row['producto_nombre']; ?></h5>
                        <span class="d-block card-price fw-bold">$ <?= number_format($row['producto_precio'], 0, ',', '.'); ?></span>
                        <?php if (session()->login) { ?>
                            <?php if (session()->perfil == 1) { ?>
                                <a href="" class="btn btn-primary card-button mt-4 mx-1">Comprar</a>
                            <?php } else { ?>
                                <?php echo form_open('add_cart');
                                echo form_hidden('id', $row['id_producto']);
                                echo form_hidden('nombre', $row['producto_nombre']);
                                echo form_hidden('precio', $row['producto_precio']);
                                ?>
                                <button class="btn btn-primary card-button mt-4 mx-1" onclick="addToCart()">Comprar</button>
                                <?php echo form_close(); ?>
                            <?php } ?>
                        <?php } else { ?>
                            <a href="<?php echo base_url('loginUsuario'); ?>" class="btn btn-primary card-button mt-4 mx-1">Comprar</a>
                        <?php } ?>
                        <a href="<?php echo base_url('producto/' . $row['id_producto']); ?>" class="btn btn-info card-button mt-4 mx-1">Ver mas</a>
                    </div>
                </div>
            </li>
        <?php } ?>
    </ul>
</div>