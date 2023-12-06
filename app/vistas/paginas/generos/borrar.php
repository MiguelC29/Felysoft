<?php require RUTA_APP . '/vistas/inc/header.php'; ?>
<div class="contenedor-form">
    <form id="formsFelysoft" action="<?php echo RUTA_URL; ?>generos/borrar/<?php echo $datos['pkIdGenero'] ?>" method="post">
        <h2 class="titulo-form">BORRAR GÉNERO</h2>
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" class="form-control form-control-lg" value="<?php echo $datos['nombre'] ?>" readonly>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripcion:</label>
            <input type="text" name="descripcion" class="form-control form-control-lg" value="<?php echo $datos['descripcion'] ?>" readonly>
        </div>
        <div class="text-center">
            <input type="submit" class="btn btn-success" value="Borrar" onclick='return confirmarDelete()'>
            <a href="<?php echo RUTA_URL; ?>generos" class="btn btn-primary">Volver</a>
        </div>
    </form>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php'; ?>