<div class="container-fluid bg-oscuro table-responsive p-0">
    <?php $cart = \Config\Services::cart(); ?>
    <h1 class="text-center text-white py-5">Tus compras</h1>
    
    <?php if (session()->getFlashdata('MensajeProducto')) { ?>
        <div class='alert alert-success alert-dismissible fade show text-center py-3 my-3' role='alert' id='mensaje'>
            <?= session()->getFlashdata('MensajeProducto'); ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php } ?>
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