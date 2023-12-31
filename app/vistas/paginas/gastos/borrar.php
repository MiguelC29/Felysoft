<?php require RUTA_APP . '/vistas/inc/header.php';?>

<div class="contenedor-form">
    <form id="formsFelysoft" action="<?php echo RUTA_URL;?>gastos/borrar/<?php echo $datos['pkIdGasto']?>" method="post">
        <h2 class="titulo-form">BORRAR GASTO</h2>
        <div class="form-group">
            <label for="fecha">Fecha:</label>
            <input type="datetime-local" name="fecha" class="form-control form-control-lg" value="<?php echo $datos['fecha']?>" readonly>
        </div>
        <div class="form-group">
            <label for="monto">Monto:</label>
            <input type="number" name="monto" class="form-control form-control-lg" value="<?php echo $datos['monto']?>" readonly>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <input type="text" name="descripcion" class="form-control form-control-lg" value="<?php echo $datos['descripcion']?>" readonly>
        </div> 

        <div class="form-group">
            <label for="compra">Compra (Total):</label>
            <input type="number" name="compra" class="form-control form-control-lg" value="<?php echo $datos['nomCompra']?>" readonly>
        </div>
        <div class="form-group">
            <label for="pago">Pago (Método):</label>
            <input type="text" name="pago" class="form-control form-control-lg" value="<?php echo $datos['nomPago']?>" readonly>
        </div>
      
        <div class="text-center">
            <input type="submit" class="btn btn-success" value="Borrar" onclick="confirmarDelete()">
            <a href="<?php echo RUTA_URL;?>gastos" class="btn btn-primary">Volver</a>
        </div>
    </form>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php';?>