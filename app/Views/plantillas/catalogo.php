<div class="container-fluid bg-propio p-5">
    <h2 class="text-center mb-5">Nuestros productos</h2>
    <ul class="row gy-5">
            <?php foreach ($productos as $row) { ?>
                <li class="col d-flex justify-content-center mx-3">
                    <div class="card text-center p-2" style="width: 18rem;">
                        <img src="<?php echo base_url('public/img/ejemplos/' . $row['producto_imagen']); ?>" height="300" width="300" class="card-img-top" alt="...">
                        <div class="card-body mt-2">
                            <h5 class="card-title my-3 "><?= $row['producto_nombre']; ?></h5>
                            <span class="d-block fw-bold" id="precio"><?= $row['producto_precio']; ?></span>
                            <a href="" class="btn btn-primary mt-4">Comprar</a>
                        </div>
                    </div>
                </li>
            <?php } ?>
    </ul>
</div>