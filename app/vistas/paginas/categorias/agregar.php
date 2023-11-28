<?php require RUTA_APP . '/vistas/inc/header.php';?>
<div class="card card-body bg-light mt-5">
    <h2>Agregar categorias</h2>
    <form action="<?php echo RUTA_URL;?>categorias/agregar" method="post">
        <div class="form-group">
            <label for="nombre">Nombre: <sup>*</sup></label>
            <input type="text" name="nombre" class="form-control form-control-lg" required>
        </div>
        <input type="submit" class="btn btn-success" value="Agregar Categoria" onclick='return confirmarInsert()'>
        <a href="<?php echo RUTA_URL;?>categorias" class="btn btn-primary">Volver</a>
    </form>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php';?>