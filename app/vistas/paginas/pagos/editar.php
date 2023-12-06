<?php require RUTA_APP . '/vistas/inc/header.php';?>
<div class="card card-body bg-light mt-5">
    <h2>Editar pago</h2>
    <form id="formsFelysoft" action="<?php echo RUTA_URL;?>pagos/editar/<?php echo $datos['pkIdPago']?>" method="post">
        <div class="form-group">
            <label for="metodoPago">Método de pago: <sup>*</sup></label>
            <input type="text" name="metodoPago" class="form-control form-control-lg" value="<?php echo $datos['metodoPago']?>">
        </div>

        <div class="form-group">
            <label for="estado">Estado: <sup>*</sup></label>
            <input type="text" name="estado" class="form-control form-control-lg" value="<?php echo $datos['estado']?>">
        </div>

        <div class="form-group">
            <label for="fechaPago">Fecha de pago: <sup>*</sup></label>
            <input type="datetime-local" name="fechaPago" class="form-control form-control-lg" value="<?php echo $datos['fechaPago']?>">
        </div>

        <div class="form-group">
            <label for="valorPago">Valor de pago: <sup>*</sup></label>
            <input type="number" name="valorPago" class="form-control form-control-lg" value="<?php echo $datos['valorPago']?>">
        </div>

        <input type="submit" class="btn btn-success" value="Editar Pago" onclick='return confirmarUpdate()'>
        <a href="<?php echo RUTA_URL;?>pagos" class="btn btn-primary">Volver</a>
    </form>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php';?>