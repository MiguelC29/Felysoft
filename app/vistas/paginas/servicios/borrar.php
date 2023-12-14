<?php require RUTA_APP . '/vistas/inc/header.php'; ?>
<?php require RUTA_APP . '/vistas/inc/sidebar.php'; ?>
<?php require RUTA_APP . '/vistas/inc/navbar.php'; ?>

<div class="contenedor-form">
    <form id="formsFelysoft" action="<?php echo RUTA_URL; ?>servicios/borrar/<?php echo $datos['pkIdServicio']; ?>" method="post">
        <h2 class="titulo-form">BORRAR AGENDAMIENTO DE SERVICIO</h2>
        <div class="form-group">
            <label for="estado">Estado:</label>
            <input type="text" name="estado" class="form-control form-control-lg" value="<?php echo $datos['estado']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="fechaModificacion">Última fecha de modificación:</label>
            <input type="datetime" name="fechaModificacion" class="form-control form-control-lg" value="<?php echo $datos['fechaModificacion']; ?>" readonly>
        </div>
        <div class="text-center">
            <input type="submit" class="btn btn-success" value="Borrar" onclick="confirmarDelete()">
            <a href="<?php echo RUTA_URL; ?>servicios" class="btn btn-primary">Cancelar</a>
        </div>
    </form>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php'; ?>
