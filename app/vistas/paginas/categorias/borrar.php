<?php require RUTA_APP . '/vistas/inc/header.php';?>
<div class="card card-body bg-light mt-5">
    <h2>Borrar categoria</h2>
    <form action="<?php echo RUTA_URL;?>categorias/borrar/<?php echo $datos['pkIdCategoria']?>" method="post">
        <div class="form-group">
            <label for="nombre">Nombre: <sup>*</sup></label>
            <input type="text" name="nombre" class="form-control form-control-lg" value="<?php echo $datos['nombre']?>" readonly>
        </div>
        <input type="submit" class="btn btn-success" value="Borrar Categoria">
        <a href="<?php echo RUTA_URL;?>categorias">Volver</a>
    </form>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php';?>