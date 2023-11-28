<?php require RUTA_APP . '/vistas/inc/header.php'; ?>
<div class="card card-body bg-light mt-5">
    <h2>Borrar compra</h2>
    <form id="formsFelysoft" action="<?php echo RUTA_URL; ?>compras/borrar/<?php echo $datos['pkIdCompra'] ?>" method="post">
        <div class="form-group">
            <label for="fechaCompra">Fecha de Compra:</label>
            <input type="date" name="fechaCompra" class="form-control form-control-lg" value="<?php echo $datos['fechaCompra'] ?>" readonly>
        </div>

        <div class="form-group">
            <label for="total">Total:</label>
            <input type="number" name="total" class="form-control form-control-lg" value="<?php echo $datos['total'] ?>" readonly>
        </div>

        <input type="submit" class="btn btn-success" value="Borrar Compra" onclick='return confirmarDelete()'>
        <a href="<?php echo RUTA_URL; ?>compras" class="btn btn-primary">Volver</a>
    </form>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php'; ?>