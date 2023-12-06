<?php require RUTA_APP . '/vistas/inc/header.php'; ?>
<div class="contenedor-form">
    <form id="formsFelysoft" action="<?php echo RUTA_URL; ?>libros/borrar/<?php echo $datos['pkIdLibro'] ?>" method="post">
        <h2 class="titulo-form">BORRAR LIBRO</h2>
        <div class="form-group">
            <label for="titulo">Titulo:</label>
            <input type="text" name="titulo" class="form-control form-control-lg" value="<?php echo $datos['titulo'] ?>" readonly>
        </div>
        <div class="form-group">
            <label for="editorial">Editorial:</label>
            <input type="text" name="editorial" class="form-control form-control-lg" value="<?php echo $datos['editorial'] ?>" readonly>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripcion :</label>
            <input type="text" name="descripcion" class="form-control form-control-lg"
                value="<?php echo $datos['descripcion'] ?>" readonly>
        </div>
        <div class="form-group">
            <label for="anioPublicacion">Año de Publicacion:</label>
            <input type="number" name="anioPublicacion" class="form-control form-control-lg"
                value="<?php echo $datos['anioPublicacion'] ?>" readonly>
        </div>
        <div class="form-group">
            <label for="precioHora">Precio Por Hora:</label>
            <input type="number" name="precioHora" class="form-control form-control-lg"
                value="<?php echo $datos['precioHora'] ?>" readonly>
        </div>
        <div class="form-group">
            <label for="autor">Autor:</label>
            <input type="text" name="autor" class="form-control form-control-lg"
                value="<?php echo $datos['nomAut'] ?>" readonly>
        </div>
        <div class="form-group">
            <label for="nombre">Género:</label>
            <input type="text" name="genero" class="form-control form-control-lg" value="<?php echo $datos['nomGen'] ?>" readonly>
        </div>
        <div class="text-center">
            <input type="submit" class="btn btn-success" value="Borrar" onclick='return confirmarDelete()'>
            <a href="<?php echo RUTA_URL; ?>libros" class="btn btn-primary">Volver</a>
        </div>
    </form>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php'; ?>