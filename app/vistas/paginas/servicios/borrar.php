<?php require RUTA_APP . '/vistas/inc/header.php'; ?>
<div class="card card-body bg-light mt-5">
    <h2>Borrar Agendamiento de Servicio</h2>
    <p>¿Estás seguro de que deseas borrar este agendamiento?</p>
    <form id="formsFelysoft" action="<?php echo RUTA_URL; ?>servicios/borrar/<?php echo $datos['pkIdServicio']; ?>" method="post">
        <div class="form-group">
            <label for="estado">Estado: <?php echo $datos['estado']; ?></label>
        </div>
        <div class="form-group">
            <label for="fechaModificacion">Última fecha de modificación: <?php echo $datos['fechaModificacion']; ?></label>
        </div>
        <input type="submit" class="btn btn-danger" value="Confirmar" onclick='return confirmarDelete()'>
        <a href="<?php echo RUTA_URL; ?>servicios" class="btn btn-primary">Cancelar</a>
    </form>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php'; ?>
