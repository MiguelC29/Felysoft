<?php require RUTA_APP . '/vistas/inc/header.php';?>
<div class="card card-body bg-light mt-5">
    <h2>Borrar proveedor</h2>
    <form action="<?php echo RUTA_URL;?>proveedores/borrar/<?php echo $datos['pkIdProveedores']?>" method="post">
        <div class="form-group">
            <label for="nit">NIT:</label>
            <input type="text" name="nit" class="form-control form-control-lg" value="<?php echo $datos['nit']?>" readonly>
        </div>
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" class="form-control form-control-lg" value="<?php echo $datos['nombre']?>" readonly>
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono:</label>
            <input type="text" name="telefono" class="form-control form-control-lg" value="<?php echo $datos['telefono']?>" readonly>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control form-control-lg" value="<?php echo $datos['email']?>" readonly>
        </div>
        <input type="submit" class="btn btn-success" value="Borrar Proveedor">
        <a href="<?php echo RUTA_URL;?>proveedores" class="btn btn-primary">Volver</a>
    </form>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php';?>