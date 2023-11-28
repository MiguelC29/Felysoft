<?php require RUTA_APP . '/vistas/inc/header.php'; ?>
<div class="card card-body bg-light mt-5">
    <h2>Editar Genero</h2>
    <form id="formsFelysoft" action="<?php echo RUTA_URL; ?>generos/editar/<?php echo $datos['pkIdGenero'] ?>" method="post">
        <div class="form-group">
            <label for="nombre">Nombre: <sup>*</sup></label>
            <input type="text" name="nombre" class="form-control form-control-lg" value="<?php echo $datos['nombre'] ?>" required>
            <label for="descripcion">Descripcion: <sup>*</sup></label>
            <input type="text" name="descripcion" class="form-control form-control-lg" value="<?php echo $datos['descripcion'] ?>" required>
        </div>
        <input type="submit" class="btn btn-success" value="Editar Genero" onclick='return confirmarUpdate()'>
        <a href="<?php echo RUTA_URL; ?>generos" class="btn btn-primary">Volver</a>
    </form>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php'; ?>