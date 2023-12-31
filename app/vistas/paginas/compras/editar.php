<?php require RUTA_APP . '/vistas/inc/header.php'; ?>

<div class="contenedor-form">
    <form id="formsFelysoft" action="<?php echo RUTA_URL; ?>compras/editar/<?php echo $datos['pkIdCompra'] ?>" method="post" novalidate>
        <h2 class="titulo-form">EDITAR COMPRA</h2>
        <div class="form-group">
            <label for="fechaCompra">Fecha de Compra: <sup>*</sup></label>
            <input type="date" name="fechaCompra" class="form-control form-control-lg" value="<?php echo $datos['fechaCompra'] ?>" required>
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div>

        <div class="form-group">
            <label for="total">Total: <sup>*</sup></label>
            <input type="number" name="total" class="form-control form-control-lg" value="<?php echo $datos['total'] ?>" required>
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div>

        <div class="text-center">
            <input type="submit" class="btn btn-success" value="Guardar" onclick="confirmarUpdate()">
            <a href="<?php echo RUTA_URL; ?>compras" class="btn btn-primary">Volver</a>
        </div>
    </form>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php'; ?>