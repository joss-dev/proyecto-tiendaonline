<!-- final de pagina -->
<footer class="text-center text-white pt-3" style="background-color: #03001c;">
    <ul class="row m-0 g-5">
        <li class="col-md-4 ">
            <h4 class="titulo-footer">Tecno Phone</h4>
            <ul class="m-3">
                <?php if (session()->perfil == 1) { ?>
                    <li class="p-2">
                        <a href="<?php echo base_url('productos/all'); ?>" class="text-white">Productos</a>
                    </li>
                    <li class="p-2">
                        <a href="<?php echo base_url('consultasAdmin'); ?>" class="text-white">Consultas</a>
                    </li>
                    <li class="p-2">
                        <a href="<?php echo base_url('Ventas'); ?>" class="text-white">Ventas</a>
                    </li>
                    <li class="p-2">
                        <a href="<?php echo base_url('gestionProductos'); ?>" class="text-white">Gestionar Productos</a>
                    </li>

                <?php } else { ?>
                    <li class="p-2">
                        <a href="<?php echo base_url('productos/all'); ?>" class="text-white">Productos</a>
                    </li>
                    <li class="p-2">
                        <a href="<?php echo base_url('quienesSomos'); ?>" class="text-white">Quienes somos</a>
                    </li>
                    <li class="p-2">
                        <a href="<?php echo base_url('terminosYcondiciones'); ?>" class="text-white">Terminos y usos</a>
                    </li>
                    <li class="p-2">
                        <a href="<?php echo base_url('contacto'); ?>" class="text-white">Contacto</a>
                    </li>
                <?php } ?>

            </ul>
        </li>
        <li class="col-md-4 ">
            <h4 class="titulo-footer">Contacto</h4>
            <ul class="m-3">
                <li class="p-2">
                    <a href="#" class="text-white">
                        <img src="<?php echo base_url('/public/img/icons/icon-email.png'); ?>" alt="" width="40" height="40">
                        tecnophone@gmail.com
                    </a>
                </li>
                <li class="p-2">
                    <a href="#" class="text-white">
                        <img src="<?php echo base_url('/public/img/icons/icon-telefono.png'); ?>" alt="" width="40" height="40">
                        3794551245
                    </a>
                </li>
                <li class="p-2">
                    <a href="https://goo.gl/maps/BWHiZUBJtDnHqtoMA" class="text-white" target="_blank">
                        <img src="<?php echo base_url('/public/img/icons/icon-map.png'); ?>" alt="" width="40" height="40">
                        Av. Independencia 2345
                    </a>
                </li>
            </ul>
        </li>
        <li class="col-md-4 ">
            <h4 class="titulo-footer">Redes Sociales</h4>
            <ul class="m-3">
                <li class="p-2">
                    <a href="https://facebook.com" class="text-white" target="_blank">
                        <img src="<?php echo base_url('/public/img/icons/icon-facebook.png'); ?>" alt="" width="50" height="50">
                        Facebook
                    </a>
                </li>
                <li class="p-2">
                    <a href="https://whatsapp.com" class="text-white" target="_blank">
                        <img src="<?php echo base_url('/public/img/icons/icon-whatsapp.png'); ?>" alt="" width="45" height="45">
                        Whatsapp
                    </a>
                </li>
                <li class="p-2">
                    <a href="https://instagram.com" class="text-white" target="_blank">
                        <img src="<?php echo base_url('/public/img/icons/icon-instagram.png'); ?>" alt="" width="45" height="45">
                        Instagram
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</footer>

<script src="<?php echo base_url('/public/js/myScript.js'); ?>"></script>
</body>

</html>