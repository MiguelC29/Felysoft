<?php require RUTA_APP . '/vistas/inc/header.php'; ?>
<div class="contenedor-form">
    <form id="formsFelysoft" action="<?php echo RUTA_URL; ?>autores/agregar" method="post" novalidate>
        <h2 class="titulo-form">AGREGAR AUTORES</h2>
        <div class="form-group">
            <label for="nombre">Nombre: <sup>*</sup></label>
            <input type="text" name="nombre" class="form-control form-control-lg" required>
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div>
        <div class="form-group">
            <label for="nacionalidad">Nacionalidad: <sup>*</sup></label>
            <input type="text" name="nacionalidad" class="form-control form-control-lg" required>
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div>
        <div class="form-group">
            <label for="fechaNacim">fechaNacim: <sup>*</sup></label>
            <input type="date" name="fechaNacim" class="form-control form-control-lg" required>
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div>
        <div class="form-group">
            <label for="biografia">Biografia: <sup>*</sup></label>
            <input type="text" name="biografia" class="form-control form-control-lg" required>
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div>
        <div class="text-center">
            <input type="submit" class="btn btn-success" value="Guardar" onclick="confirmarInsert()">
            <a href="<?php echo RUTA_URL; ?>autores" class="btn btn-primary">Volver</a>
        </div>
    </form>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php'; ?>