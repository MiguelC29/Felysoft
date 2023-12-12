<?php require RUTA_APP . '/vistas/inc/header.php'; ?>
<div class="contenedor-form">
    <form id="formsFelysoft" action="<?php echo RUTA_URL; ?>clientes/agregar" method="post" novalidate>
        <h2 class="titulo-form">AGREGAR CLIENTE</h2>
        <div class="form-group">
            <label for="fechaRegistro">Fecha de Registro: <sup>*</sup></label>
            <input type="text" name="fechaRegistro" class="form-control form-control-lg" required>
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div>
        <div class="form-group">
            <label for="fkIdIdentificacion">Identificacion: <sup>*</sup></label>
            <select class="form-select" aria-label="Default select example" name="fkIdIdentificacion" required>
                <option value="" selected disabled>Seleccione La identificacion</option>
                <?php foreach ($datos['usuarios'] as $usuario) : ?>
                <option value="<?php echo $usuario->pkIdIdentifcacion; ?>"><?php echo $usuario->pkIdIdentificacion; ?></option>
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
            <input type="submit" class="btn btn-success" value="Agregar" onclick="confirmarInsert()">
            <a href="<?php echo RUTA_URL; ?>clientes" class="btn btn-primary">Volver</a>
        </div>
    </form>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php'; ?>