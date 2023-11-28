<?php require RUTA_APP . '/vistas/inc/header.php'; ?>
<div class="card card-body bg-light mt-5">
    <h2>Editar compra</h2>
    <form id="formsFelysoft" action="<?php echo RUTA_URL; ?>compras/editar/<?php echo $datos['pkIdCompra'] ?>" method="post">
        <div class="form-group">
            <label for="fechaCompra">Fecha de Compra: <sup>*</sup></label>
            <input type="date" name="fechaCompra" class="form-control form-control-lg" value="<?php echo $datos['fechaCompra'] ?>" required>
        </div>

        <div class="form-group">
            <label for="total">Total: <sup>*</sup></label>
            <input type="number" name="total" class="form-control form-control-lg" value="<?php echo $datos['total'] ?>" required>
        </div>

        <input type="submit" class="btn btn-success" value="Editar Compra" onclick='return confirmarUpdate()'>
        <a href="<?php echo RUTA_URL; ?>compras" class="btn btn-primary">Volver</a>
    </form>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php'; ?>