<?php require RUTA_APP . '/vistas/inc/header.php';?>
<div class="card card-body bg-light mt-5">
    <h2>Borrar ingreso</h2>
    <form id="formsFelysoft" action="<?php echo RUTA_URL;?>ingresos/borrar/<?php echo $datos['pkIdIngreso']?>" method="post">
        <div class="form-group">
            <label for="fecha">Fecha:</label>
            <input type="datetime-local" name="fecha" class="form-control form-control-lg" value="<?php echo $datos['fecha']?>" readonly>
        </div>
        <div class="form-group">
            <label for="monto">Monto:</label>
            <input type="number" name="monto" class="form-control form-control-lg" value="<?php echo $datos['monto']?>" readonly>
        </div>

        <div class="form-group">
            <label for="venta">Venta ():</label>
            <input type="number" name="venta" class="form-control form-control-lg" value="<?php echo $datos['nomVenta']?>" readonly>
        </div>
      
        <input type="submit" class="btn btn-success" value="Borrar Ingreso" onclick='return confirmarDelete()'>
        <a href="<?php echo RUTA_URL;?>ingresos" class="btn btn-primary">Volver</a>
    </form>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php';?>