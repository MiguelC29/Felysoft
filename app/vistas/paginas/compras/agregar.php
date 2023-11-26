<?php require RUTA_APP . '/vistas/inc/header.php';?>
<div class="card card-body bg-light mt-5">
    <h2>Agregar compras</h2>
    <form action="<?php echo RUTA_URL;?>compras/agregar" method="post">
        <div class="form-group">
            <label for="fechaCompra">Fecha de Compra: <sup>*</sup></label>
            <input type="date" name="fechaCompra" class="form-control form-control-lg">
        </div>

        <div class="form-group">
            <label for="total">Total: <sup>*</sup></label>
            <input type="number" name="total" class="form-control form-control-lg">
        </div>

        <input type="submit" class="btn btn-success" value="Agregar Compra">
        <a href="<?php echo RUTA_URL;?>compras">Volver</a>
    </form>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php';?>