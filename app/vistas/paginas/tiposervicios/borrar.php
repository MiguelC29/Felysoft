<?php require RUTA_APP . '/vistas/inc/header.php'; ?>
<?php require RUTA_APP . '/vistas/inc/sidebar.php'; ?>
<?php require RUTA_APP . '/vistas/inc/navbar.php'; ?>

<div class="contenedor-form">
    <form id="formsFelysoft" action="<?php echo RUTA_URL; ?>tiposervicios/borrar/<?php echo $datos['idTipoServicio'] ?>" method="post">
        <h2 class="titulo-form">BORRAR SERVICIO</h2>
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" class="form-control form-control-lg" value="<?php echo $datos['nombre'] ?>" readonly>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <input type="text" id="descripcion" name="descripcion" class="form-control form-control-lg" value="<?php echo $datos['descripcion'] ?>" readonly>
        </div>
        <div class="form-group">
            <label for="precio">Precio:</label>
            <input type="text" id="precio" name="precio" class="form-control form-control-lg" value="<?php echo $datos['precio'] ?>" readonly>
        </div>
        <div class="text-center">
            <input type="submit" class="btn btn-success" value="Borrar Servicio" onclick="confirmarDelete()">
            <a href="<?php echo RUTA_URL; ?>tiposervicios" class="btn btn-primary">Volver</a>
        </div>
    </form>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php'; ?>