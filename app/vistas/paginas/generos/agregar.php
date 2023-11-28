<?php require RUTA_APP . '/vistas/inc/header.php';?>
<div class="card card-body bg-light mt-5">
    <h2>Agregar Genero</h2>
    <form action="<?php echo RUTA_URL;?>generos/agregar" method="post">
        <div class="form-group">
            <label for="nombre">Nombre: <sup>*</sup></label>
            <input type="text" name="nombre" class="form-control form-control-lg">
            <label for="descripcion">Descripcion: <sup>*</sup></label>
            <input type="text" name="descripcion" class="form-control form-control-lg">
        </div>
        <input type="submit" class="btn btn-success" value="Agregar Genero">
        <a href="<?php echo RUTA_URL;?>generos">Volver</a>
    </form>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php';?>