<?php require RUTA_APP . '/vistas/inc/header.php';?>
<div class="card card-body bg-light mt-5">
    <h2>Editar Servicio</h2>
    <form id="formsFelysoft" action="<?php echo RUTA_URL;?>tiposervicios/editar/<?php echo $datos['idTipoServicio']?>" method="post">
        <div class="form-group">
            <label for="nombre">Nombre: <sup>*</sup></label>
            <input type="text" id="nombre" name="nombre" class="form-control form-control-lg" value="<?php echo $datos['nombre']?>">
            <label for="descripcion">Descripción: <sup>*</sup></label>
            <input type="text" id="descripcion" name="descripcion" class="form-control form-control-lg" value="<?php echo $datos['descripcion']?>">
            <label for="precio">Precio: <sup>*</sup></label>
            <input type="text" id="precio" name="precio" class="form-control form-control-lg" value="<?php echo $datos['precio']?>">
        </div>
        <input type="submit" class="btn btn-success" value="Editar Servicio" onclick="return confirmarUpdate()">
        <a href="<?php echo RUTA_URL;?>tiposervicios">Volver</a>
    </form>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php';?>