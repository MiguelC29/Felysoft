<?php require RUTA_APP . '/vistas/inc/header.php'; ?>
<div class="card card-body bg-light mt-5">
    <h2>Agregar Cliente</h2>
    <form id="formsFelysoft" action="<?php echo RUTA_URL; ?>clientes/agregar" method="post"
        enctype="multipart/form-data">
        <div class="form-group">
            <label for="fechaRegistro">Fecha de Registro: <sup>*</sup></label>
            <input type="text" name="fechaRegistro" class="form-control form-control-lg" required>
        </div>
        <div class="form-group">
            <label for="fkIdIdentificacion">Identificacion: <sup>*</sup></label>
            <select class="form-select" aria-label="Default select example" name="fkIdIdentificacion" required>
                <option value="" selected disabled>Seleccione La identificacion</option>
                <?php foreach ($datos['usuarios'] as $usuario) : ?>
                <option value="<?php echo $usuario->pkIdIdentifcacion; ?>"><?php echo $usuario->pkIdIdentificacion; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <input type="submit" class="btn btn-success" value="Agregar Cliente" onclick='return confirmarInsert()'>
        <a href="<?php echo RUTA_URL; ?>clientes" class="btn btn-primary">Volver</a>
    </form>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php'; ?>