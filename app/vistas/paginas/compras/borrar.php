<?php require RUTA_APP . '/vistas/inc/header.php'; ?>
<div class="contenedor-form">
    <form id="formsFelysoft" action="<?php echo RUTA_URL; ?>compras/borrar/<?php echo $datos['pkIdCompra'] ?>" method="post">
        <h2 class="titulo-form">BORRAR COMPRA</h2>
        <div class="form-group">
            <label for="fechaCompra">Fecha de Compra:</label>
            <input type="date" name="fechaCompra" class="form-control form-control-lg" value="<?php echo $datos['fechaCompra'] ?>" readonly>
        </div>

        <div class="form-group">
            <label for="total">Total:</label>
            <input type="number" name="total" class="form-control form-control-lg" value="<?php echo $datos['total'] ?>" readonly>
        </div>
        <div class="text-center">
            <input type="submit" class="btn btn-success" value="Borrar" onclick='return confirmarDelete()'>
            <a href="<?php echo RUTA_URL; ?>compras" class="btn btn-primary">Volver</a>
        </div>
    </form>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php'; ?>