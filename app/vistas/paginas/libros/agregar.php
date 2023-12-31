<?php require RUTA_APP . '/vistas/inc/header.php'; ?>

<div class="contenedor-form">
    <form id="formsFelysoft" action="<?php echo RUTA_URL; ?>libros/agregar" method="post" novalidate>
        <h2 class="titulo-form">AGREGAR LIBROS</h2>
        <div class="form-group">
            <label for="titulo">Titulo: <sup>*</sup></label>
            <input type="text" name="titulo" class="form-control form-control-lg" required>
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div>
        <div class="form-group">
            <label for="editorial">Editorial: <sup>*</sup></label>
            <input type="text" name="editorial" class="form-control form-control-lg" required>
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripcion: <sup>*</sup></label>
            <input type="text" name="descripcion" class="form-control form-control-lg" required>
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div>
        <div class="form-group">
            <label for="anioPublicacion">Año de Publicacion: <sup>*</sup></label>
            <input type="date" name="anioPublicacion" class="form-control form-control-lg" required>
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div>
        <div class="form-group">
            <label for="precioHora">Precio Por Hora: <sup>*</sup></label>
            <input type="number" name="precioHora" class="form-control form-control-lg" required>
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div>
        <div class="form-group">
            <label for="idAutor">Autor: <sup>*</sup></label>
            <select class="form-select" aria-label="Default select example" name="idAutor" required>
                <option value="" selected disabled>Seleccione El Autor</option>
                <?php foreach ($datos['autores'] as $autor) : ?>
                <option value="<?php echo $autor->pkIdAutor; ?>"><?php echo $autor->nombre; ?></option>
                <?php endforeach; ?>
            </select>
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div>
        <div class="form-group">
            <label for="idGenero">Genero: <sup>*</sup></label>
            <select class="form-select" aria-label="Default select example" name="idGenero" required>
                <option value="" selected disabled>Seleccione el Genero</option>
                <?php foreach ($datos['generos'] as $genero) : ?>
                <option value="<?php echo $genero->pkIdGenero; ?>"><?php echo $genero->nombre; ?></option>
                <?php endforeach; ?>
            </select>
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div>
        <div class="text-center">
            <input type="submit" class="btn btn-success" value="Guardar" onclick="confirmarInsert()">
            <a href="<?php echo RUTA_URL; ?>libros" class="btn btn-primary">Volver</a>
        </div>
    </form>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php'; ?>