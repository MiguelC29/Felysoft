<?php require RUTA_APP . '/vistas/inc/header.php';?>
<div class="card card-body bg-light mt-5">
    <h2>Borrar Autor</h2>
    <form action="<?php echo RUTA_URL;?>autores/borrar/<?php echo $datos['pkIdAutor']?>" method="post">
        <div class="form-group">
            <label for="nombre">Nombre: <sup>*</sup></label>
            <input type="text" name="nombre" class="form-control form-control-lg" value="<?php echo $datos['nombre']?>" readonly>
            <label for="nacionalidad">Nacionalidad: <sup>*</sup></label>
            <input type="text" name="nacionalidad" class="form-control form-control-lg" value="<?php echo $datos['nacionalidad']?>" readonly>
            <label for="fechaNacim">Fecha de Nacimiento: <sup>*</sup></label>
            <input type="date" name="fechaNacim" class="form-control form-control-lg" value="<?php echo $datos['fechaNacim']?>" readonly>
            <label for="biografia">Biografia: <sup>*</sup></label>
            <input type="text" name="biografia" class="form-control form-control-lg" value="<?php echo $datos['biografia']?>" readonly>
        </div>
        <input type="submit" class="btn btn-success" value="Borrar Autor">
        <a href="<?php echo RUTA_URL;?>autores">Volver</a>
    </form>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php';?>