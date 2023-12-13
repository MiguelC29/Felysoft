<?php require RUTA_APP . '/vistas/inc/header.php';?>
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
    <div >
    <h1 class="text-white text-center mt-2">Carrito</h1>
    <div><a class="nav-link" data-bs-toggle="modal" data-bs-target="#modal_cart" style="color: red;"><i class="fas fa-shopping-cart"></i> <?php echo $totalcantidad; ?></a></div>

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
                    <a type="button" class="btn btn-primary" href="<?php echo RUTA_URL; ?>carritos/borrarCarro">Vaciar Carrito</a>
                </div>
            </div>
        </div>
    </div>

    <!-- ARTICULOS -->
    <div>
        <div class="row" style="justify-content: center;">
            <div class="card m-4 bg-white" style="width: 18rem;">
                <form id="formulario" name="formulario" action="<?php echo RUTA_URL; ?>carritos/cart" method="post">
                    <input name="precio" type="hidden" id="precio" value="1200"/>
                    <input name="titulo" type="hidden" id="titulo" value="Galletas Festival"/>
                    <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2"/>
                    <img src="https://lh3.googleusercontent.com/2hsM4qq4bgdfCwpcumWaPARp47ecGTWSqGhngf1H7REEdC3voluzxNmEwu7Id_WENcaET3wRXRM6CF_mRRZJrbRZCzDtccLl0wn4uxazAHcF8YI" alt="..." class="card-img-top" width = "400px" height = "300px">
                    <div class="card-body">
                        <h5 class="card-title">Galletas Festival</h5>
                        <p class="card-text">Festival - Precio $1.200</p>
                        <button class="btn btn-primary" type="submit"><i class="fas fa-shopping-cart"></i> Añadir al carrito</button>
                    </div>
                </form>
            </div>
            <div class="card m-4 bg-white" style="width: 18rem;">
                <form id="formulario" name="formulario" action="<?php echo RUTA_URL; ?>carritos/cart" method="post">
                    <input name="precio" type="hidden" id="precio" value="2000"/>
                    <input name="titulo" type="hidden" id="titulo" value="Papas Ricas de Limon"/>
                    <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2"/>
                    <img src="https://www.superricas.com/sites/default/files/2019-04/papas-limon.png" alt="..." class="card-img-top" width = "400px" height = "300px">
                    <div class="card-body">
                        <h5 class="card-title">Papas Ricas de Limon</h5>
                        <p class="card-text">Papas Ricas - Precio $2.000</p>
                        <button class="btn btn-primary" type="submit"><i class="fas fa-shopping-cart"></i> Añadir al carrito</button>
                    </div>
                </form>
            </div>
            <div class="card m-4 bg-white" style="width: 18rem;">
                <form id="formulario" name="formulario" action="<?php echo RUTA_URL; ?>carritos/cart" method="post">
                    <input name="precio" type="hidden" id="precio" value="2600"/>
                    <input name="titulo" type="hidden" id="titulo" value="Coca-Cola sin Azucar	"/>
                    <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2"/>
                    <img src="https://copservir.vtexassets.com/arquivos/ids/769475/GASEOSA-COCA-SINAZUCAR_F.png?v=637950298429530000" alt="..." class="card-img-top" width = "400px" height = "300px">
                    <div class="card-body">
                        <h5 class="card-title">Coca-Cola sin Azucar	</h5>
                        <p class="card-text">Coca-Cola - Precio $2600</p>
                        <button class="btn btn-primary" type="submit"><i class="fas fa-shopping-cart"></i> Añadir al carrito</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php';?>