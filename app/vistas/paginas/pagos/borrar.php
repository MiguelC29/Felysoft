<?php require RUTA_APP . '/vistas/inc/header.php';?>
<div class="card card-body bg-light mt-5">
    <h2>Borrar pago</h2>
    <form action="<?php echo RUTA_URL;?>pagos/borrar/<?php echo $datos['pkIdPago']?>" method="post">

        <div class="form-group">
            <label for="metodoPago">Método de pago:</label>
            <input type="text" name="metodoPago" class="form-control form-control-lg" value="<?php echo $datos['metodoPago']?>" readonly>
        </div>  

        <div class="form-group">
            <label for="estado">Estado:</label>
            <input type="text" name="estado" class="form-control form-control-lg" value="<?php echo $datos['estado']?>" readonly>
        </div>

        <div class="form-group">
            <label for="fechaPago">Fecha de pago:</label>
            <input type="date-time" name="fechaPago" class="form-control form-control-lg" value="<?php echo $datos['fechaPago']?>" readonly>
        </div>

        <div class="form-group">
            <label for="valorPago">Valor de pago:</label>
            <input type="number" name="valorPago" class="form-control form-control-lg" value="<?php echo $datos['valorPago']?>" readonly>
        </div>

        <input type="submit" class="btn btn-success" value="Borrar Pago" onclick='return confirmarDelete()'>
        <a href="<?php echo RUTA_URL;?>pagos" class="btn btn-primary">Volver</a>
    </form>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php';?>