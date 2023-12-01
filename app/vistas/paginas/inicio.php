<?php require RUTA_APP . '/vistas/inc/header.php'; ?>
<!-- <div class="container add" id="container">
    <div class="brand">
        <h3>Web Dev</h3>
        <a href="#" id="toggle"><i class="bi bi-list"></i></a>
    </div>
    <div class="user">
        <img src=".\public\img\logo.jpeg" alt="">
        <div class="name">
            <h5>Alex Milton</h5>
            <span>Web Developer</span>
        </div>
    </div>
    <div class="navbar">
        <ul>
            <li><a href="#"><i class="bi bi-house"></i><span>DashBoard</span></a></li>
            <li><a href="#"><i class="bi bi-person"></i><span>User</span></a></li>
            <li><a href="#"><i class="bi bi-chat-right-text"></i><span>Message</span></a></li>
            <li><a href="#"><i class="bi bi-graph-up-arrow"></i><span>Analytics</span></a></li>
            <li><a href="#"><i class="bi bi-folder"></i><span>file manager</span></a></li>
            <li><a href="#"><i class="bi bi-cart"></i><span>Order</span></a></li>
            <li><a href="#"><i class="bi bi-heart"></i><span>WishList</span></a></li>
            <li><a href="#"><i class="bi bi-gear"></i><span>Setting</span></a></li>
        </ul>
    </div>

    <div class="navbar">
        <ul>
            <li><a href="#"><i class="bi bi-box-arrow-in-right"></i><span>Log Out</span></a></li>
        </ul>
    </div>
</div> -->
<!-- <div class="container-xl">
    <nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
        <img src=".\public\img\icon.png" alt="Logo" width="40" height="35" class="d-inline-block align-text-top">
        Felysoft
        </a>
        <div class="dropdown me-5">
            <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <img id="user" src=".\public\img\user.png" alt="mdo" width="40" height="40" class="rounded-circle">
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Ajustes</a></li>
                <li><a class="dropdown-item" href="#">Perfil</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Salir</a></li>
            </ul>
        </div>
    </div>
    </nav>
</div> -->
<div class="container mt-4">
<a href="<?php echo RUTA_URL ?>categorias" class="btn btn-success">CATEGORIAS</a>
<a href="<?php echo RUTA_URL ?>compras" class="btn btn-success">COMPRAS</a>
<a href="<?php echo RUTA_URL ?>productos" class="btn btn-success">PRODUCTOS</a>
<a href="<?php echo RUTA_URL ?>proveedores" class="btn btn-success">PROVEEDORES</a>
<a href="<?php echo RUTA_URL ?>tiposervicios" class="btn btn-success">SERVICIOS</a>
<a href="<?php echo RUTA_URL ?>servicios" class="btn btn-success">SERVICIOS AGENDADOS</a>
<a href="<?php echo RUTA_URL ?>autores" class="btn btn-success">AUTORES</a>
<a href="<?php echo RUTA_URL ?>generos" class="btn btn-success">GENEROS</a>
<a href="<?php echo RUTA_URL ?>pagos" class="btn btn-success">PAGOS</a>
<a href="<?php echo RUTA_URL ?>gastos" class="btn btn-success">GASTOS</a>
<a href="<?php echo RUTA_URL ?>libros" class="btn btn-success">LIBROS</a>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php';?>