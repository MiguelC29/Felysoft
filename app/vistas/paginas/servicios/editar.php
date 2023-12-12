<?php require RUTA_APP . '/vistas/inc/header.php'; ?>
<div class="contenedor-form">
    <form id="formsFelysoft" action="<?php echo RUTA_URL; ?>servicios/editar/<?php echo $datos['pkIdServicio']; ?>" method="post" novalidate>
        <h2 class="titulo-form">ACTUALIZAR ESTADO DE SERVICIO</h2>
        <div class="form-group">
            <label for="estado">Estado: <sup>*</sup></label>
            <select class="form-select" name="estado">
                <option value="Activo" <?php echo ($datos['estado'] == 'Activo') ? 'selected' : ''; ?>>Activo</option>
                <option value="Inactivo" <?php echo ($datos['estado'] == 'Inactivo') ? 'selected' : ''; ?>>Inactivo</option>
                <option value="Pendiente" <?php echo ($datos['estado'] == 'Pendiente') ? 'selected' : ''; ?>>Pendiente</option>
                <option value="Confirmada" <?php echo ($datos['estado'] == 'Confirmada') ? 'selected' : ''; ?>>Confirmada</option>
                <option value="Cancelada" <?php echo ($datos['estado'] == 'Cancelada') ? 'selected' : ''; ?>>Cancelada</option>
                </select>
                <div class="valid-feedback">
                    Campo completado!
                </div>
                <div class="invalid-feedback">
                    Por favor, complete el campo!
                </div>
        </div>
        <div class="form-group">
            <label for="fechaModificacion">Fecha de Modificación: </label>
            <input type="datetime" name="fechaModificacion" class="form-control form-control-lg" value="<?php echo $datos['fechaModificacion']; ?>" readonly>
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div>
        <div class="text-center">
            <input type="submit" class="btn btn-success" value="Guardar" onclick="confirmarUpdate()">
            <a href="<?php echo RUTA_URL; ?>servicios" class="btn btn-primary">Volver</a>
        </div>
    </form>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php'; ?>
