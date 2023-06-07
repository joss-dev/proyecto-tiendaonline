<div class="container-fluid bg-oscuro table-responsive p-0">
    <?php $cart = \Config\Services::cart(); ?>
    <h1 class="text-center text-white py-5">Tus compras</h1>

    <?php if (session()->getFlashdata('MensajeCompra')) { ?>
        <script>
            window.onload = function() {
            var modal = document.getElementById('miVentanaModal');
            modal.style.display = 'block';
            
            };
            function cerrarModal() {
                var modal = document.getElementById('miVentanaModal');
                modal.style.display = 'none';
            }
        </script>
    <?php } ?>

    <div class="modal" id="miVentanaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Estimado cliente</h5>
                        <button onclick="cerrarModal()" type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <p><?= session()->getFlashdata('MensajeCompra'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    
    <table class="table table-hover mb-0">
        <?php if ($cart->contents() == NULL) { ?>
            <div class="text-center mb-5">
                <h2 class="alert alert-info">El carrito esta vacio</h2>
                <a href="<?php echo base_url('productos/all'); ?>" class="btn btn-primary">Ver catalogo</a>
            </div>
        <?php } ?>
        <?php
        if ($cart1 = $cart->contents()) { ?>
            <thead>
                <tr class="table-dark">
                    <th scope="col">N° Item</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Subtotal</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php
                $total = 0;
                $i = 1;
                foreach ($cart1 as $item) { ?>
                    <tr class="table-light">
                        <th scope="row"><?= $i++ ?></th>
                        <td><?= $item['name'] ?></td>
                        <td>$ <?= number_format($item['price'], 0, ',', '.'); ?></td>
                        <td><?= $item['qty'] ?></td>
                        <td>$ <?= number_format($item['subtotal'], 0, ',', '.');
                                $total += $item['subtotal']; ?></td>
                        <td><a href="<?php echo base_url('eliminar_item/' . $item['rowid']); ?>" class="btn btn-danger">Eliminar</a></td>
                    </tr>
                <?php } ?>
            </tbody>

    </table>
    <div class="py-5">
        <h2 class="text-white d-inline ms-4 me-5 ">Total compra: $ <?= number_format($total, 0, ',', '.'); ?></h2>
        <a href="<?php echo base_url('comprarCarrito'); ?>" class="btn btn-success ms-5">Comprar</a>
        <a href="<?php echo base_url('vaciarCarrito'); ?>" class="btn btn-danger ms-5">Vaciar carrito</a>
    </div>
<?php } ?>
</div>