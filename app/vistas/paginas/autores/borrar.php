<?php require RUTA_APP . '/vistas/inc/header.php'; ?>

<div class="contenedor-form">
    <form id="formsFelysoft" action="<?php echo RUTA_URL; ?>autores/borrar/<?php echo $datos['pkIdAutor'] ?>" method="post">
        <h2 class="titulo-form">BORRAR AUTOR</h2>
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" class="form-control form-control-lg" value="<?php echo $datos['nombre'] ?>" readonly>
        </div>
        <div class="form-group">
            <label for="nacionalidad">Nacionalidad:</label>
            <input type="text" name="nacionalidad" class="form-control form-control-lg" value="<?php echo $datos['nacionalidad'] ?>" readonly>
        </div>
        <div class="form-group">
            <label for="fechaNacim">Fecha de Nacimiento:</label>
            <input type="date" name="fechaNacim" class="form-control form-control-lg" value="<?php echo $datos['fechaNacim'] ?>" readonly>
        </div>
        <div class="form-group">
            <label for="biografia">Biografia:</label>
            <input type="text" name="biografia" class="form-control form-control-lg" value="<?php echo $datos['biografia'] ?>" readonly>
        </div>
        <div class="text-center">
            <input type="submit" class="btn btn-success" value="Borrar" onclick="confirmarDelete()">
            <a href="<?php echo RUTA_URL; ?>autores" class="btn btn-primary">Volver</a>
        </div>
    </form>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php'; ?>