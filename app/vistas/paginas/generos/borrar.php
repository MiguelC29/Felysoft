<?php require RUTA_APP . '/vistas/inc/header.php';?>
<div class="card card-body bg-light mt-5">
    <h2>Borrar Genero</h2>
    <form action="<?php echo RUTA_URL;?>generos/borrar/<?php echo $datos['pkIdGenero']?>" method="post">
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" class="form-control form-control-lg" value="<?php echo $datos['nombre']?>" readonly>
            <label for="descripcion">Descripcion:</label>
            <input type="text" name="descripcion" class="form-control form-control-lg" value="<?php echo $datos['descripcion']?>" readonly>
        </div>
        <input type="submit" class="btn btn-success" value="Borrar Genero" onclick='return confirmarDelete()'>
        <a href="<?php echo RUTA_URL;?>generos" class="btn btn-primary">Volver</a>
    </form>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php';?>