<?php require RUTA_APP . '/vistas/inc/header.php';?>
<div class="card card-body bg-light mt-5">
    <h2>Agregar Ventas</h2>
    <form id="formsFelysoft" action="<?php echo RUTA_URL;?>ventas/agregar" method="post" enctype="multipart/form-data">

        <div class="form-group">
            <label for="fechaVenta">Fecha Venta: <sup>*</sup></label>
            <input type="datetime-local" name="fechaVenta" class="form-control form-control-lg" required>
        </div>
        <div class="form-group">
            <label for="subtotal">Subtotal: <sup>*</sup></label>
            <input type="number" name="subtotal" class="form-control form-control-lg" required>
        </div>
        <div class="form-group">
            <label for="total">Total: <sup>*</sup></label>
            <input type="number" name="total" class="form-control form-control-lg" required>
        </div>

        <div class="form-group">
            <label for="idPago">Pago (Método): <sup>*</sup></label>
            <select class="form-select" aria-label="Default select example" name="idPago" required>
            <option value= "" selected disabled>Seleccione el método de pago</option>
            <?php foreach($datos['pagos'] as $pago) : ?>
                <option value="<?php echo $pago->pkIdPago; ?>"><?php echo $pago->metodoPago; ?></option>
            <?php endforeach; ?>
            </select>
        </div>

        <input type="submit" class="btn btn-success" value="Agregar Venta" onclick='return confirmarInsert()'>
        <a href="<?php echo RUTA_URL;?>ventas" class="btn btn-primary">Volver</a>
    </form>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php';?>