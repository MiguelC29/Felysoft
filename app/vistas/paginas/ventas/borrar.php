<?php require RUTA_APP . '/vistas/inc/header.php';?>
<div class="contenedor-form">
    <form id="formsFelysoft" action="<?php echo RUTA_URL;?>ventas/borrar/<?php echo $datos['pkIdVenta']?>" method="post">
        <h2 class="titulo-form">BORRAR VENTA</h2>
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
        <div class="text-center">
            <input type="submit" class="btn btn-success" value="Borrar" onclick="confirmarDelete()">
            <a href="<?php echo RUTA_URL;?>ventas" class="btn btn-primary">Volver</a>
        </div>
    </form>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php';?>