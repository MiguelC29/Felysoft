<?php require RUTA_APP . '/vistas/inc/header.php'; ?>
<div class="contenedor-form">
    <form id="formsFelysoft" action="<?php echo RUTA_URL; ?>reservas/editar/<?php echo $datos['pkIdReserva'] ?>" method="post" novalidate>
        <h2 class="titulo-form">EDITAR RESERVA</h2>
        <div class="form-group">
            <label for="fechaReserva">Fecha De La Reserva: <sup>*</sup></label>
            <input type="datetime-local" name="fechaReserva" class="form-control form-control-lg" value="<?php echo $datos['fechaReserva'] ?>" required>
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripcion: <sup>*</sup></label>
            <input type="text" name="descripcion" class="form-control form-control-lg" value="<?php echo $datos['descripcion'] ?>" required>
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div>
        <div class="form-group">
            <label for="abono">Abono: <sup>*</sup></label>
            <input type="number" name="abono" class="form-control form-control-lg" value="<?php echo $datos['abono'] ?>" required>
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div>
        <div class="form-group">
            <label for="tiempo">Precio Por Hora: <sup>*</sup></label>
            <input type="time" name="tiempo" class="form-control form-control-lg" value="<?php echo $datos['tiempo'] ?>" required>
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div>
        <div class="form-group">
            <label for="idLibro">Libro: <sup>*</sup></label>
            <select class="form-select" aria-label="Default select example" name="idLibro" required>
                <option value="" selected disabled>Seleccione el Libro</option>
                <option value="<?php echo $datos['libro']->pkIdLibro; ?>" selected>
                    <?php echo $datos['libro']->titulo; ?></option>
                <?php foreach ($datos['libros'] as $libro) : ?>
                    <option value="<?php echo $libro->pkIdLibro; ?>"><?php echo $libro->titulo; ?></option>
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
            <label for="idCliente">Cliente: <sup>*</sup></label>
            <select class="form-select" aria-label="Default select example" name="idCliente" required>
                <option value="" selected disabled>Seleccione el Cliente</option>
                <option value="<?php echo $datos['cliente']->pkIdCliente; ?>" selected>
                    <?php echo $datos['cliente']->fkIdIdentificacion; ?></option>
                <?php foreach ($datos['clientes'] as $cliente) : ?>
                    <option value="<?php echo $cliente->pkIdCliente; ?>"><?php echo $cliente->fkIdIdentificacion; ?></option>
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
            <input type="submit" class="btn btn-success" value="Guardar" onclick="confirmarUpdate()">
            <a href="<?php echo RUTA_URL; ?>reservas" class="btn btn-primary">Volver</a>
        </div>
    </form>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php'; ?>