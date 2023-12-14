<?php require RUTA_APP . '/vistas/inc/header.php';?>
<?php require RUTA_APP . '/vistas/inc/sidebar.php'; ?>
<?php require RUTA_APP . '/vistas/inc/navbar.php'; ?>

<div class="contenedor-form">
    <form id="formsFelysoft" action="<?php echo RUTA_URL;?>ingresos/borrar/<?php echo $datos['pkIdIngreso']?>" method="post">
        <h2 class="titulo-form">BORRAR INGRESO</h2>
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
        <div class="text-center">
            <input type="submit" class="btn btn-success" value="Borrar" onclick="confirmarDelete()">
            <a href="<?php echo RUTA_URL;?>ingresos" class="btn btn-primary">Volver</a>
        </div>
    </form>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php';?>