<?php require RUTA_APP . '/vistas/inc/header.php'; ?>

<?php
$carrito_mio = isset($_SESSION['carrito']) ? $_SESSION['carrito'] : array();
$_SESSION['carrito'] = $carrito_mio;

$totalcantidad = 0;

if (isset($_SESSION['carrito'])) {
    foreach ($carrito_mio as $producto) {
        if ($producto != NULL) {
            $total_cantidad = $producto['cantidad'];
            $totalcantidad += $total_cantidad;
        }
    }
}
?>
<div>
    <h1 class="text-white text-center mt-2">Carrito</h1>
    <div><a class="nav-link" data-bs-toggle="modal" data-bs-target="#modal_cart" style="color: #FFFFFF;"><svg
                xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-cart-fill"
                viewBox="0 0 16 16">
                <path
                    d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 10 0 1 0-2" />
            </svg>
            <span id="numCart"><?php echo $totalcantidad; ?></span>
        </a></div>

    <!-- MODAL CARRITO -->
    <div class="modal fade" id="modal_cart" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Carrito de compras</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <div class="p-2">
                            <ul class="list-group mb-3">
                                <?php
                                if (isset($carrito_mio)) {
                                    $total = 0;
                                    foreach ($carrito_mio as $producto) {
                                        if ($producto != NULL) {
                                ?>
                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div class="row col-12">
                                        <div class="col-6 p-0" style="text-align: left; color: #000000">
                                            <h6 class="my-0">Cantidad:
                                                <?php echo isset($producto['cantidad']) ? $producto['cantidad'] : ''; ?>
                                                : <?php echo isset($producto['titulo']) ? $producto['titulo'] : ''; ?>
                                            </h6>
                                        </div>
                                        <div class="col-6 p-0" style="text-align: right; color: #000000">
                                            <span class="text-muted"
                                                style="text-align: right; color: #000000;">$<?php echo isset($producto['precio']) ? $producto['precio'] * $producto['cantidad'] : ''; ?></span>
                                        </div>
                                    </div>
                                </li>
                                <?php
                                            $total += isset($producto['precio']) ? $producto['precio'] * $producto['cantidad'] : 0;
                                        }
                                    }
                                }
                                ?>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span style="text-align: left; color: #000000;">Total (COP)</span>
                                    <strong style="text-align: left; color: #000000;">$<?php echo $total; ?></strong>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <a type="button" class="btn btn-primary" href="<?php echo RUTA_URL; ?>carritos/borrarCarro">Vaciar
                        Carrito</a>
                </div>
            </div>
        </div>
    </div>

    <!-- ARTICULOS -->
    <div>
        <div class="row" style="justify-content: center; width: 1600px;">
            <?php foreach ($datos['productos'] as $producto) : ?>
            <div class="card m-4 bg-white" style="width: 15rem;">
                <form id="formulario" name="formulario" action="<?php echo RUTA_URL; ?>carritos/cart" method="post">
                    <input name="precio" type="hidden" id="precio" value="<?php echo $producto->precioVenta; ?>" />
                    <input name="titulo" type="hidden" id="titulo" value="<?php echo $producto->nombre; ?>" />
                    <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
                    <img class="card-img-top" width="400px" height="200px"
                        src="data:<?php echo $producto->tipoImg ?>;base64,<?php echo base64_encode($producto->imagen) ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $producto->nombre; ?></h5>
                        <p class="card-text"><?php echo $producto->marca; ?> - Precio
                            $<?php echo $producto->precioVenta; ?></p>
                        <button class="btn btn-primary" id="btnCarrito" type="submit"><i
                                class="fas fa-shopping-cart"></i>
                            Añadir
                            al
                            carrito</button>
                    </div>
                </form>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php'; ?>