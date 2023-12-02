<?php require RUTA_APP . '/vistas/inc/header.php';?>
<div class="card card-body bg-light mt-5">
    <h2>Borrar venta</h2>
    <form id="formsFelysoft" action="<?php echo RUTA_URL;?>ventas/borrar/<?php echo $datos['pkIdVenta']?>" method="post">
        <div class="form-group">
            <label for="fechaVenta">Fecha Venta:</label>
            <input type="datetime-local" name="fechaVenta" class="form-control form-control-lg" value="<?php echo $datos['fechaVenta']?>" readonly>
        </div>
        <div class="form-group">
            <label for="subtotal">Subtotal:</label>
            <input type="number" name="subtotal" class="form-control form-control-lg" value="<?php echo $datos['subtotal']?>" readonly>
        </div>
        <div class="form-group">
            <label for="total">Total:</label>
            <input type="number" name="total" class="form-control form-control-lg" value="<?php echo $datos['total']?>" readonly>
        </div> 

        <div class="form-group">
            <label for="pago">Pago (Método):</label>
            <input type="text" name="pago" class="form-control form-control-lg" value="<?php echo $datos['nomPago']?>" readonly>
        </div>
      
        <input type="submit" class="btn btn-success" value="Borrar Venta" onclick='return confirmarDelete()'>
        <a href="<?php echo RUTA_URL;?>ventas" class="btn btn-primary">Volver</a>
    </form>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php';?>