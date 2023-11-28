<?php require RUTA_APP . '/vistas/inc/header.php';?>
<div class="card card-body bg-light mt-5">
    <h2>Agregar Autores</h2>
    <form action="<?php echo RUTA_URL;?>autores/agregar" method="post">
        <div class="form-group">
            <label for="nombre">Nombre: <sup>*</sup></label>
            <input type="text" name="nombre" class="form-control form-control-lg">
            <label for="nacionalidad">Nacionalidad: <sup>*</sup></label>
            <input type="text" name="nacionalidad" class="form-control form-control-lg">
            <label for="fechaNacim">fechaNacim: <sup>*</sup></label>
            <input type="date" name="fechaNacim" class="form-control form-control-lg">
            <label for="biografia">Biografia: <sup>*</sup></label>
            <input type="text" name="biografia" class="form-control form-control-lg">
        </div>
        <input type="submit" class="btn btn-success" value="Agregar Autor" onclick='return confirmarInsert()'>
        <a href="<?php echo RUTA_URL;?>autores" class="btn btn-primary">Volver</a>
    </form>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php';?>