<?php require RUTA_APP . '/vistas/inc/header.php'; ?>
<?php require RUTA_APP . '/vistas/inc/sidebar.php'; ?>
<?php require RUTA_APP . '/vistas/inc/navbar.php'; ?>

<div class="contenedor-form">
    <form id="formsFelysoft" action="<?php echo RUTA_URL; ?>proveedores/borrar/<?php echo $datos['pkIdProveedores'] ?>" method="post">
        <h2 class="titulo-form">BORRAR PROVEEDOR</h2>
        <div class="form-group">
            <label for="nit">NIT:</label>
            <input type="text" name="nit" class="form-control form-control-lg" value="<?php echo $datos['nit'] ?>" readonly>
        </div>
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" class="form-control form-control-lg" value="<?php echo $datos['nombre'] ?>" readonly>
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono:</label>
            <input type="text" name="telefono" class="form-control form-control-lg" value="<?php echo $datos['telefono'] ?>" readonly>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control form-control-lg" value="<?php echo $datos['email'] ?>" readonly>
        </div>
        <div class="text-center">
            <input type="submit" class="btn btn-success" value="Borrar" onclick="confirmarDelete()">
            <a href="<?php echo RUTA_URL; ?>proveedores" class="btn btn-primary">Volver</a>
        </div>
    </form>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php'; ?>