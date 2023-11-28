<?php require RUTA_APP . '/vistas/inc/header.php';?>

<div class="card card-body bg-light mt-5">
    <h2>Agregar Servicio</h2>
    
    <form id="formsFelysoft" action="<?php echo RUTA_URL;?>tiposervicios/agregar" method="post">
        <div class="form-group">
            <label for="nombre">Nombre: <sup>*</sup></label>
            <input type="text" name="nombre" class="form-control form-control-lg" require>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción: <sup>*</sup></label>
            <input type="text" name="descripcion" class="form-control form-control-lg">
        </div>
        <div class="form-group">
            <label for="precio">Precio: <sup>*</sup></label>
            <input type="text" name="precio" class="form-control form-control-lg">
        </div>
        <input type="submit" class="btn btn-success" value="Agregar Servicio" onclick="return confirmarInsert()">
        <a href="<?php echo RUTA_URL;?>tiposervicios" class="btn btn-primary">Volver</a>
    </form>
</div>

<?php require RUTA_APP . '/vistas/inc/footer.php';?>
