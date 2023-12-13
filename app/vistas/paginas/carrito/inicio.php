<?php session_start();?>

<!doctype html>
<html lang="es">
    <head>
        <title>Carrito</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="id=edge">
        <link rel="shortcut icon" href="https://i.postimg.cc/bvLWrs3P/logo.png" type="image/x-icon">
        <!-- Bootstrap CSS v5.2.1 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
        <!-- FONT AWESOME -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    </head>

    <body>
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
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">FELYSOFT</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggler"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="modal" data-bs-target="#modal_cart" style="color: red;"><i class="fas fa-shopping-cart"></i> <?php echo $totalcantidad; ?></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <h1 class="text-white text-center mt-2">Carrito</h1>

        <!-- MODAL CARRITO -->
        <div class="modal fade" id="modal_cart" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
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
        <div class="container mt-5">
            <div class="row" style="justify-content: center;">
                <div class="card m-4" style="width: 18rem;">
                    <form id="formulario" name="formulario" action="<?php echo RUTA_URL; ?>carritos/cart" method="post">
                        <input name="precio" type="hidden" id="precio" value="10"/>
                        <input name="titulo" type="hidden" id="titulo" value="articulo 1"/>
                        <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2"/>
                        <img src="https://www.conasi.eu/blog/wp-content/uploads/2022/11/galletas-sin-gluten-1.jpg" alt="..." class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Producto 1</h5>
                            <p class="card-text">Descripción - Precio $10</p>
                            <button class="btn btn-primary" type="submit"><i class="fas fa-shopping-cart"></i> Añadir al carrito</button>
                        </div>
                    </form>
                </div>
                <div class="card m-4" style="width: 18rem;">
                    <form id="formulario" name="formulario" action="<?php echo RUTA_URL; ?>carritos/cart" method="post">
                        <input name="precio" type="hidden" id="precio" value="20"/>
                        <input name="titulo" type="hidden" id="titulo" value="articulo 2"/>
                        <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2"/>
                        <img src="https://www.conasi.eu/blog/wp-content/uploads/2022/11/galletas-sin-gluten-1.jpg" alt="..." class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Producto 2</h5>
                            <p class="card-text">Descripción - Precio $20</p>
                            <button class="btn btn-primary" type="submit"><i class="fas fa-shopping-cart"></i> Añadir al carrito</button>
                        </div>
                    </form>
                </div>
                <div class="card m-4" style="width: 18rem;">
                    <form id="formulario" name="formulario" action="<?php echo RUTA_URL; ?>carritos/cart" method="post">
                        <input name="precio" type="hidden" id="precio" value="30"/>
                        <input name="titulo" type="hidden" id="titulo" value="articulo 3"/>
                        <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2"/>
                        <img src="https://www.conasi.eu/blog/wp-content/uploads/2022/11/galletas-sin-gluten-1.jpg" alt="..." class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Producto 3</h5>
                            <p class="card-text">Descripción - Precio $30</p>
                            <button class="btn btn-primary" type="submit"><i class="fas fa-shopping-cart"></i> Añadir al carrito</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>