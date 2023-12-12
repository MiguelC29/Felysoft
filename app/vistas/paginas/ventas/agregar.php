<?php require RUTA_APP . '/vistas/inc/header.php';?>
<div class="contenedor-form">    
    <form id="formsFelysoft" action="<?php echo RUTA_URL;?>ventas/agregar" method="post" novalidate>
        <h2 class="titulo-form">AGREGAR VENTAS</h2>
        <div class="form-group">
            <label for="fechaVenta">Fecha Venta: <sup>*</sup></label>
            <input type="datetime-local" name="fechaVenta" class="form-control form-control-lg" required>
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div>
        <div class="form-group">
            <label for="subtotal">Subtotal: <sup>*</sup></label>
            <input type="number" name="subtotal" class="form-control form-control-lg" required>
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div>
        <div class="form-group">
            <label for="total">Total: <sup>*</sup></label>
            <input type="number" name="total" class="form-control form-control-lg" required>
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div>

        <div class="form-group">
            <label for="idPago">Pago (Método): <sup>*</sup></label>
            <select class="form-select" aria-label="Default select example" name="idPago" required>
            <option value= "" selected disabled>Seleccione el método de pago</option>
            <?php foreach($datos['pagos'] as $pago) : ?>
                <option value="<?php echo $pago->pkIdPago; ?>"><?php echo $pago->metodoPago; ?></option>
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
            <a href="<?php echo RUTA_URL;?>ventas" class="btn btn-primary">Volver</a>
        </div>
    </form>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php';?>