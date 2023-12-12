<?php require RUTA_APP . '/vistas/inc/header.php';?>
<div class="contenedor-form">
    <form id="formsFelysoft" action="<?php echo RUTA_URL;?>pagos/agregar" method="post" novalidate>
        <h2 class="titulo-form">AGREGAR PAGOS</h2>
        <div class="form-group">
            <label for="metodoPago">Metodo de pago: <sup>*</sup></label>
            <select class="form-select" aria-label="Default select example" id="metodoPago" name="metodoPago" required>
                <option value="" selected disabled>Seleccione el método de pago</option>
                <option value="Efectivo">Efectivo</option>
                <option value="Transferencia">Transferencia</option>
            </select>
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div>

        <div class="form-group">
            <label for="estado">Estado: <sup>*</sup></label>
            <select class="form-select" aria-label="Default select example" id="estado" name="estado" required>
                <option value="" selected disabled>Seleccione el estado</option>
                <option value="Pagado">Pagado</option>
                <option value="Pendiente">Pendiente</option>
            </select>
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div>

        <div class="form-group">
            <label for="fechaPago">Fecha de pago: <sup>*</sup></label>
            <input type="datetime-local" name="fechaPago" class="form-control form-control-lg" required>
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div>

        <div class="form-group">
            <label for="valorPago">Valor de pago: <sup>*</sup></label>
            <input type="number" name="valorPago" class="form-control form-control-lg" required>
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div> 

        <div class="text-center">
            <input type="submit" class="btn btn-success" value="Guardar" onclick="confirmarInsert()">
            <a href="<?php echo RUTA_URL;?>pagos" class="btn btn-primary">Volver</a>
        </div>
    </form>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php';?>