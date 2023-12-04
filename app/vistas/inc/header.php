<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="id=edge">
    <link rel="shortcut icon" href="https://i.postimg.cc/bvLWrs3P/logo.png" type="image/x-icon">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- JQUERY -->
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/searchbuilder/1.6.0/css/searchBuilder.dataTables.min.css" />    
    <link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.5.1/css/dataTables.dateTime.min.css" />    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.7.0/css/select.dataTables.min.css" />
    <!-- CSS Propio -->
    <link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL ?>/css/estilos.css">
    <link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL ?>/css/sidebar.css">
    <script type="text/javascript">
    function confirmarDelete() {
        Swal.fire({
            title: "¿Estás seguro? Se eliminarán los datos.",
            showCancelButton: true,
            confirmButtonText: 'Ok', //Deben usar onclick en los submit, ejemplo: <input type="submit" class="btn btn-success" value="Agregar Servicio" onclick="return confirmarInsert()">
            cancelButtonText: 'Cancelar',
            icon: 'warning'
        }).then((result) => {
            if (result.value) {
                document.getElementById('formsFelysoft')
                    .submit(); //Deben usar este ID en sus formularios, ejemplo: <form id="formsFelysoft" action="...
            }
        });
        return false; //Evita que el formulario se envie automaticamente
    }

    function confirmarInsert() {
        var formulario = document.getElementById('formsFelysoft');

        if (formulario.checkValidity()) { //checkValidity valida que el formulario cumpla primero con los required
            Swal.fire({
                title: "¿Estás seguro? Se guardarán los datos ingresados.",
                showCancelButton: true,
                confirmButtonText: 'Ok',
                cancelButtonText: 'Cancelar',
                icon: 'warning'
            }).then((result) => {
                if (result.value) {
                    formulario.submit();
                }
            });
        } else {
            formulario.reportValidity(); //reportValidity muestra la validacion de los required en los input
        }
        return false;
    }


    function confirmarUpdate() {
        var formulario = document.getElementById('formsFelysoft');

        if (formulario.checkValidity()) {
            Swal.fire({
                title: "¿Estás seguro? Se actualizarán los datos ingresados.",
                showCancelButton: true,
                confirmButtonText: 'Ok',
                cancelButtonText: 'Cancelar',
                icon: 'warning'
            }).then((result) => {
                if (result.value) {
                    document.getElementById('formsFelysoft').submit();
                }
            });
        } else {
            formulario.reportValidity();
        }
        return false;
    }
    </script>
    <title><?php echo NOMBRESITIO; ?></title>
</head>

<body>
    <div class="contenedor add active" id="container">
        <div class="brand">
            <h3>FELYSOFT</h3>
            <a href="<?php echo RUTA_APP ?>" id="toggle" onclick="toggleNavbar()"><i class="bi bi-list"></i></a>
        </div>
        <div class="user">
            <img src="https://i.postimg.cc/HLH1VGmw/user.png" alt="">
            <div class="name">
                <h5>GAES 3</h5>
                <span>Desarrolladores</span>
            </div>
        </div>
        <div class="nave">
            <ul>
                <li><a href="<?php echo RUTA_URL ?>"><i class="bi bi-house-fill"></i><span>Inicio</span></a></li>
                <li><a id="almacen" data-bs-toggle="collapse" href="#almacen"><i id="dashboardIcon" class="bi bi-archive-fill"></i><span class="d-inline-flex gap-1">Almacen<i class="bi bi-chevron-down"></i></span></a></li>
                <div class="collapse" id="almacen">
                    <div class="card card-body" style="margin: 0px; padding: 0px; width: 150px;">
                        <ul>
                            <li><a href="<?php echo RUTA_URL ?>tiposervicios">Servicios</a></li>
                            <li><a href="<?php echo RUTA_URL ?>productos">Productos</a></li>
                            <li><a href="<?php echo RUTA_URL ?>categorias">Categorías</a></li>
                            <li><a href="<?php echo RUTA_URL ?>libros">Libros</a></li>
                            <li><a href="<?php echo RUTA_URL ?>autores">Autores</a></li>
                            <li><a href="<?php echo RUTA_URL ?>generos">Generos</a></li>
                        </ul>
                    </div>
                </div>
                <li><a href="#"><i class="bi bi-cart-fill"></i><span>Venta</span></a></li>

                <li><a id="comprasProv" data-bs-toggle="collapse" href="#comprasProv"><i class="bi bi-truck"></i><span class="d-inline-flex gap-1">Compras<i class="bi bi-chevron-down"></i></span></a></li>
                <div class="collapse" id="comprasProv">
                    <div class="card card-body" style="margin: 0px; padding: 0px; width: 150px;">
                        <ul>
                            <li><a href="<?php echo RUTA_URL ?>compras">Consultar compras</a></li>
                            <li><a href="<?php echo RUTA_URL ?>proveedores">Proveedores</a></li>
                        </ul>
                    </div>
                </div>
                <li><a id="reservaLibros" data-bs-toggle="collapse" href="#reservaLibros"><i class="bi bi-calendar2-check-fill"></i><span class="d-inline-flex gap-1">Reservas<i class="bi bi-chevron-down"></i></span></a></li>
                <div class="collapse" id="reservaLibros">
                    <div class="card card-body" style="margin: 0px; padding: 0px; width: 150px;">
                        <ul>
                            <li><a href="<?php echo RUTA_URL ?>libros">Reservas Libros</a></li>
                            <li><a href="<?php echo RUTA_URL ?>servicios">Reservas Servicios</a></li>
                            <a href="<?php echo RUTA_URL ?>gastos">GASTOS</a>
                        </ul>
                    </div>
                </div>
                <li><a id="inventarioAll" data-bs-toggle="collapse" href="#inventarioAll"><i class="bi bi-box-fill"></i><span class="d-inline-flex gap-1">Inventario<i class="bi bi-chevron-down"></i></span></a></li>
                <div class="collapse" id="inventarioAll">
                    <div class="card card-body" style="margin: 0px; padding: 0px; width: 150px;">
                        <ul>
                            <li><a href="">Productos</a></li>
                        </ul>
                    </div>
                </div>

                <li><a href="#"><i class="bi bi-graph-up-arrow"></i><span>Analíticas</span></a></li>
                <li><a href="#"><i class="bi bi-people-fill"></i><span>Usuarios</span></a></li>
                <li><a href="#"><i class="bi bi-gear-fill"></i><span>Configuración</span></a></li>
            </ul>
        </div>

        <div class="nave">
            <ul>
                <li><a href="#"><i class="bi bi-box-arrow-in-right"></i><span>Log Out</span></a></li>
            </ul>
        </div>
    </div>

    <nav class="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo RUTA_URL ?>">
                <img src="https://i.postimg.cc/bvLWrs3P/logo.png" alt="Logo" width="30" height="35" class="d-inline-block">
                <em class="text-white align-middle"><?php echo NOMBRESITIO; ?></em>
            </a>
            <div class="datetime text-white" id="datetime"></div>
        </div>
    </nav>

    <div class="container mt-4">