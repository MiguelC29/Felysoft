<?php require RUTA_APP . '/vistas/inc/header.php'; ?>
<div class="card card-body bg-light mt-5">
    <h2>Agregar Reserva</h2>
    <form id="formsFelysoft" action="<?php echo RUTA_URL; ?>reservas/agregar" method="post"
        enctype="multipart/form-data">
        <div class="form-group">
            <label for="fechaReserva">Fecha de la Reserva: <sup>*</sup></label>
            <input type="datetima-local" name="fechaReserva" class="form-control form-control-lg" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripcion: <sup>*</sup></label>
            <input type="text" name="descripcion" class="form-control form-control-lg" required>
        </div>
        <div class="form-group">
            <label for="abono">Abono: <sup>*</sup></label>
            <input type="number" name="abono" class="form-control form-control-lg" required>
        </div>
        <div class="form-group">
            <label for="tiempo">Tiempo: <sup>*</sup></label>
            <input type="time" name="tiempo" class="form-control form-control-lg" required>
        </div>
        <div class="form-group">
            <label for="idLibro">Libro: <sup>*</sup></label>
            <select class="form-select" aria-label="Default select example" name="idLibro" required>
                <option value="" selected disabled>Seleccione El Libro</option>
                <?php foreach ($datos['libros'] as $libro) : ?>
                <option value="<?php echo $libro->pkIdLibro; ?>"><?php echo $libro->titulo; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="idCliente">Cliente : <sup>*</sup></label>
            <select class="form-select" aria-label="Default select example" name="idCliente" required>
                <option value="" selected disabled>Seleccione el Cliente</option>
                <?php foreach ($datos['clientes'] as $cliente) : ?>
                <option value="<?php echo $cliente->pkIdCliente; ?>"><?php echo $cliente->fkIdIdentificacion; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <input type="submit" class="btn btn-success" value="Agregar Reserva" onclick='return confirmarInsert()'>
        <a href="<?php echo RUTA_URL; ?>reservas" class="btn btn-primary">Volver</a>
    </form>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php'; ?>