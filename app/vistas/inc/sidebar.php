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
            <li><a href="<?php echo RUTA_URL ?>paginas"><i class="bi bi-house-fill"></i><span>Inicio</span></a></li>
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
            <li><a id="comprasProv" data-bs-toggle="collapse" href="#comprasProv"><i class="bi bi-truck"></i><span
                        class="d-inline-flex gap-1">Compras<i class="bi bi-chevron-down"></i></span></a></li>
            <div class="collapse" id="comprasProv">
                <div class="card card-body" style="margin: 0px; padding: 0px; width: 150px;">
                    <ul>
                        <li><a href="<?php echo RUTA_URL ?>compras">Consultar compras</a></li>
                        <li><a href="<?php echo RUTA_URL ?>proveedores">Proveedores</a></li>
                    </ul>
                </div>
            </div>
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

            <li><a href="#"><i class="bi bi-graph-up-arrow"></i><span>Dashboard</span></a></li>
            <li><a href="<?php echo RUTA_URL ?>usuarios"><i class="bi bi-people-fill"></i><span>Usuarios</span></a></li>
            <li><a href="#"><i class="bi bi-gear-fill"></i><span>Configuración</span></a></li>
        </ul>
    </div>

    <div class="nave">
        <ul>
            <li><a href="<?php echo RUTA_URL ?>autenticaciones/cerrarSesion"><i
                        class="bi bi-box-arrow-in-right"></i><span>Log Out</span></a></li>
        </ul>
    </div>
</div>