<?php require RUTA_APP . '/vistas/inc/header.php'; ?>
<div class="card card-body bg-light mt-5">
    <h2>Borrar Autor</h2>
    <form id="formsFelysoft" action="<?php echo RUTA_URL; ?>autores/borrar/<?php echo $datos['pkIdAutor'] ?>" method="post">
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" class="form-control form-control-lg" value="<?php echo $datos['nombre'] ?>" readonly>
            <label for="nacionalidad">Nacionalidad:</label>
            <input type="text" name="nacionalidad" class="form-control form-control-lg" value="<?php echo $datos['nacionalidad'] ?>" readonly>
            <label for="fechaNacim">Fecha de Nacimiento:</label>
            <input type="date" name="fechaNacim" class="form-control form-control-lg" value="<?php echo $datos['fechaNacim'] ?>" readonly>
            <label for="biografia">Biografia:</label>
            <input type="text" name="biografia" class="form-control form-control-lg" value="<?php echo $datos['biografia'] ?>" readonly>
        </div>
        <input type="submit" class="btn btn-success" value="Borrar Autor" onclick='return confirmarDelete()'>
        <a href="<?php echo RUTA_URL; ?>autores" class="btn btn-primary">Volver</a>
    </form>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php'; ?>