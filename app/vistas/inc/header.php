<?php
session_start();

//Verifica si el usuario está autenticado antes de mostrar la página
if (!isset($_SESSION['usuario_id'])) {
    redireccionar('');
    exit();
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="id=edge">
    <link rel="shortcut icon" href="https://i.postimg.cc/bvLWrs3P/logo.png" type="image/x-icon">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- JQUERY -->
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/searchbuilder/1.6.0/css/searchBuilder.dataTables.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.5.1/css/dataTables.dateTime.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.7.0/css/select.dataTables.min.css" />
    <!-- CSS Propio -->
    <link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL ?>/css/estilos.css">
    <link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL ?>/css/sidebar.css">
    
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <title><?php echo NOMBRESITIO; ?></title>
</head>

<body>

    <div class="container mt-4">
        <nav class="navbar">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?php echo RUTA_URL ?>paginas">
                    <img src="https://i.postimg.cc/bvLWrs3P/logo.png" alt="Logo" width="30" height="35"
                        class="d-inline-block">
                    <em class="text-white align-middle"><?php echo NOMBRESITIO; ?></em>
                </a>
                <div class="datetime text-white me-4" id="datetime"></div>
            </div>
        </nav>

        <div class="contenedor add active" id="container">
            <div class="brand">
                <h3>FELYSOFT</h3>
                <a href="<?php echo RUTA_APP ?>" id="toggle" onclick="toggleNavbar()"><i class="bi bi-list"></i></a>
            </div>
            <div class="user">
                <img src="https://i.postimg.cc/HLH1VGmw/user.png" alt="">
                <div class="name">
                    <h5><?php echo $_SESSION['usuario_nombre']; ?></h5>
                    <span><?php echo $_SESSION['rolUser']; ?></span>
                </div>
            </div>
            <div class="nave">
                <ul>
                    <?php if($_SESSION['rolU'] == 1 || $_SESSION['rolU'] == 2){?>
                    <li><a href="<?php echo RUTA_URL ?>paginas"><i
                                class="bi bi-house-fill"></i><span>Inicio</span></a></li>
                    <?php } ?>

                    <?php
                        if ($_SESSION['rolU'] == 1) {?>
                    <li><a id="almacen" data-bs-toggle="collapse" href="#almacen"><i id="dashboardIcon"
                                class="bi bi-archive-fill"></i><span class="d-inline-flex gap-1">Almacen<i
                                    class="bi bi-chevron-down"></i></span></a></li>
                    <div class="collapse" id="almacen">
                        <div class="card card-body" style="margin: 0px; padding: 0px; width: 150px;">
                            <ul>
                                <li><a href="<?php echo RUTA_URL ?>tiposervicios">Servicios</a></li>
                                <li><a href="<?php echo RUTA_URL ?>productos">Productos</a></li>
                                <li><a href="<?php echo RUTA_URL ?>categorias">Categorías</a></li>
                                <li><a href="<?php echo RUTA_URL ?>libros">Libros</a></li>
                                <li><a href="<?php echo RUTA_URL ?>autores">Autores</a></li>
                                <li><a href="<?php echo RUTA_URL ?>generos">Géneros</a></li>
                                <li><a href="<?php echo RUTA_URL ?>clientes">Clientes</a></li>
                            </ul>
                        </div>
                    </div>
                    <?php } ?>


                    <?php
                        if($_SESSION['rolU'] == 1 || $_SESSION['rolU'] == 2) {?>
                    <li><a id="venta" data-bs-toggle="collapse" href="#venta"><i class="bi bi-cart-fill"></i><span
                                class="d-inline-flex gap-1">Venta<i class="bi bi-chevron-down"></i></span></a></li>
                    <div class="collapse" id="venta">
                        <div class="card card-body" style="margin: 0px; padding: 0px; width: 150px;">
                            <ul>
                                <li><a href="<?php echo RUTA_URL ?>carritos">Carrito de Compras</a></li>
                                <li><a href="<?php echo RUTA_URL ?>gastos">Gastos</a></li>
                                <li><a href="<?php echo RUTA_URL ?>ingresos">Ingresos</a></li>
                                <li><a href="<?php echo RUTA_URL ?>pagos">Pagos</a></li>
                            </ul>
                        </div>
                    </div>
                    <?php } ?>

                    <?php
                        if($_SESSION['rolU'] == 1) {?>
                    <li><a id="comprasProv" data-bs-toggle="collapse" href="#comprasProv"><i
                                class="bi bi-truck"></i><span class="d-inline-flex gap-1">Compras<i
                                    class="bi bi-chevron-down"></i></span></a></li>
                    <div class="collapse" id="comprasProv">
                        <div class="card card-body" style="margin: 0px; padding: 0px; width: 150px;">
                            <ul>
                                <li><a href="<?php echo RUTA_URL ?>compras">Consultar compras</a></li>
                                <li><a href="<?php echo RUTA_URL ?>proveedores">Proveedores</a></li>
                            </ul>
                        </div>
                    </div>
                    <?php } ?>

                    <?php
                        if($_SESSION['rolU'] == 1 || $_SESSION['rolU'] == 2) {?>
                    <li><a id="reservaLibros" data-bs-toggle="collapse" href="#reservaLibros"><i
                                class="bi bi-calendar2-check-fill"></i><span class="d-inline-flex gap-1">Reservas<i
                                    class="bi bi-chevron-down"></i></span></a></li>
                    <div class="collapse" id="reservaLibros">
                        <div class="card card-body" style="margin: 0px; padding: 0px; width: 150px;">
                            <ul>
                                <li><a href="<?php echo RUTA_URL ?>reservas">Reservas Libros</a></li>
                                <li><a href="<?php echo RUTA_URL ?>servicios">Reservas Servicios</a></li>
                            </ul>
                        </div>
                    </div>
                    <?php } ?>

                    <?php
                        if($_SESSION['rolU'] == 1) {?>
                    <li><a id="inventarioAll" data-bs-toggle="collapse" href="#inventarioAll"><i
                                class="bi bi-box-fill"></i><span class="d-inline-flex gap-1">Inventario<i
                                    class="bi bi-chevron-down"></i></span></a></li>
                    <div class="collapse" id="inventarioAll">
                        <div class="card card-body" style="margin: 0px; padding: 0px; width: 150px;">
                            <ul>
                                <li><a href="<?php echo RUTA_URL ?>inventarioProductos">Productos</a></li>
                                <li><a href="<?php echo RUTA_URL ?>inventarioLibros">Libros Digitales</a></li>
                            </ul>
                        </div>
                    </div>
                    <?php } ?>

                    <?php
                        if($_SESSION['rolU'] == 1) {?>
                    <li><a href="#"><i class="bi bi-graph-up-arrow"></i><span>Dashboard</span></a></li>
                    <?php } ?>

                    <?php
                        if($_SESSION['rolU'] == 1) {?>
                    <li><a href="<?php echo RUTA_URL ?>usuarios"><i
                                class="bi bi-people-fill"></i><span>Usuarios</span></a></li>
                    <?php } ?>

                    <?php
                        if($_SESSION['rolU'] == 1) {?>
                    <li><a href="#"><i class="bi bi-gear-fill"></i><span>Configuración</span></a></li>
                    <?php } ?>
                </ul>
            </div>

            <?php
                if($_SESSION['rolU'] == 1 || $_SESSION['rolU'] == 2) {?>
                    <div class="nave">
                        <ul>
                            <li><a href="<?php echo RUTA_URL ?>autenticaciones/cerrarSesion"><i class="bi bi-box-arrow-in-right"></i><span>Log Out</span></a></li>
                        </ul>
                    </div>
                <?php } ?>
        </div>