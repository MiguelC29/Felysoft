<?php require RUTA_APP . '/vistas/inc/header.php'; ?>
<div class="card card-body bg-light mt-5">
    <h2>Borrar Reserva</h2>
    <form id="formsFelysoft" action="<?php echo RUTA_URL; ?>reservas/borrar/<?php echo $datos['pkIdReserva'] ?>"
        method="post">
        <div class="form-group">
            <label for="fechaReserva">Fecha de La Reserva:</label>
            <input type="datetime -local" name="fechaReserva" class="form-control form-control-lg" value="<?php echo $datos['fechaReserva'] ?>"
                readonly>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripcion :</label>
            <input type="text" name="descripcion" class="form-control form-control-lg"
                value="<?php echo $datos['descripcion'] ?>" readonly>
        </div>
        <div class="form-group">
            <label for="abono">Abono:</label>
            <input type="number" name="abono" class="form-control form-control-lg"
                value="<?php echo $datos['abono'] ?>" readonly>
        </div>
        <div class="form-group">
            <label for="tiempo">Tiempo de Reserva:</label>
            <input type="time" name="tiempo" class="form-control form-control-lg"
                value="<?php echo $datos['tiempo'] ?>" readonly>
        </div>
        <div class="form-group">
            <label for="titulo">Libro:</label>
            <input type="text" name="libro" class="form-control form-control-lg"
                value="<?php echo $datos['nomLib'] ?>" readonly>
        </div>
        <div class="form-group">
            <label for="fkIdIdentificacion">Cliente:</label>
            <input type="text" name="cliente" class="form-control form-control-lg"
                value="<?php echo $datos['nomCli'] ?>" readonly>
        </div>
        <input type="submit" class="btn btn-success" value="Borrar Reserva" onclick='return confirmarDelete()'>
        <a href="<?php echo RUTA_URL; ?>reservas" class="btn btn-primary">Volver</a>
    </form>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php'; ?>