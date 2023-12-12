<?php require RUTA_APP . '/vistas/inc/header.php';?>
<div class="contenedor-form">
    <form class="needs-validation" id="formsFelysoft" action="<?php echo RUTA_URL;?>ingresos/editar/<?php echo $datos['pkIdIngreso']?>" method="post" novalidate>
        <h2 class="titulo-form">EDITAR INGRESO</h2>
        <div class="form-group">
            <label for="fecha">Fecha: <sup>*</sup></label>
            <input type="datetime-local" name="fecha" class="form-control form-control-lg" value="<?php echo $datos['fecha']?>" required>
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div>

        <div class="form-group">
            <label for="monto">Monto: <sup>*</sup></label>
            <input type="number" name="monto" class="form-control form-control-lg" value="<?php echo $datos['monto']?>" required>
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div>
        
        <div class="form-group">
            <label for="idVenta">Venta (subtotal): <sup>*</sup></label>
            <select class="form-select" aria-label="Default select example" name="idVenta">
            <option value = "" selected disabled>Seleccione el subtotal de la venta</option>
            <option value="<?php echo $datos['venta']->pkIdVenta; ?>" selected>
            <?php echo $datos['venta']->subtotal; ?></option>
            <?php foreach($datos['ventas'] as $venta) : ?>
                <option value="<?php echo $venta->pkIdVenta; ?>"><?php echo $venta->subtotal; ?></option>
            <?php endforeach; ?>
            </select>
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div>
        <div class="text-center">
            <input type="submit" class="btn btn-success" value="Guardar">
            <a href="<?php echo RUTA_URL;?>ingresos" class="btn btn-primary">Volver</a>
        </div>
    </form>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php';?>