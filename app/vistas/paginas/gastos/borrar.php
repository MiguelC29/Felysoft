<?php require RUTA_APP . '/vistas/inc/header.php';?>
<div class="card card-body bg-light mt-5">
    <h2>Borrar gasto</h2>
    <form action="<?php echo RUTA_URL;?>gastos/borrar/<?php echo $datos['pkIdGasto']?>" method="post">
        <div class="form-group">
            <label for="fecha">Fecha:</label>
            <input type="date" name="fecha" class="form-control form-control-lg" value="<?php echo $datos['fecha']?>" readonly>
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
      
        <input type="submit" class="btn btn-success" value="Borrar Gasto" onclick='return confirmarDelete()'>
        <a href="<?php echo RUTA_URL;?>gastos" class="btn btn-primary">Volver</a>
    </form>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php';?>