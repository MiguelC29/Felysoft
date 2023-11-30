<?php require RUTA_APP . '/vistas/inc/header.php'; ?>
<div class="card card-body bg-light mt-5">
    <h2>Actualizar estado de Servicio</h2>
    <form id="formsFelysoft" action="<?php echo RUTA_URL; ?>servicios/editar/<?php echo $datos['pkIdServicio']; ?>" method="post">
        <div class="form-group">
            <label for="estado">Estado: <sup>*</sup></label>
            <select class="form-select" name="estado">
                <option value="Activo" <?php echo ($datos['estado'] == 'Activo') ? 'selected' : ''; ?>>Activo</option>
                <option value="Inactivo" <?php echo ($datos['estado'] == 'Inactivo') ? 'selected' : ''; ?>>Inactivo</option>
                <option value="Pendiente" <?php echo ($datos['estado'] == 'Pendiente') ? 'selected' : ''; ?>>Pendiente</option>
                <option value="Confirmada" <?php echo ($datos['estado'] == 'Confirmada') ? 'selected' : ''; ?>>Confirmada</option>
                <option value="Cancelada" <?php echo ($datos['estado'] == 'Cancelada') ? 'selected' : ''; ?>>Cancelada</option>
            </select>
        </div>
        <div class="form-group">
            <label for="fechaModificacion">Fecha de Modificación: <?php echo $datos['fechaModificacion']; ?></label>

        </div>
        <input type="submit" class="btn btn-success" value="Editar Servicio" onclick='return confirmarUpdate()'>
        <a href="<?php echo RUTA_URL; ?>servicios" class="btn btn-primary">Volver</a>
    </form>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php'; ?>
