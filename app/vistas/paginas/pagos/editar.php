<?php require RUTA_APP . '/vistas/inc/header.php';?>
<div class="contenedor-form">
    <form id="formsFelysoft" action="<?php echo RUTA_URL;?>pagos/editar/<?php echo $datos['pkIdPago']?>" method="post" novalidate>
        <h2 class="titulo-form">EDITAR PAGO</h2>
        <div class="form-group">
            <label for="metodoPago">Método de pago: <sup>*</sup></label>
            <input type="text" name="metodoPago" class="form-control form-control-lg" value="<?php echo $datos['metodoPago']?>">
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div>

        <div class="form-group">
            <label for="estado">Estado: <sup>*</sup></label>
            <input type="text" name="estado" class="form-control form-control-lg" value="<?php echo $datos['estado']?>">
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div>

        <div class="form-group">
            <label for="fechaPago">Fecha de pago: <sup>*</sup></label>
            <input type="datetime-local" name="fechaPago" class="form-control form-control-lg" value="<?php echo $datos['fechaPago']?>">
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div>

        <div class="form-group">
            <label for="valorPago">Valor de pago: <sup>*</sup></label>
            <input type="number" name="valorPago" class="form-control form-control-lg" value="<?php echo $datos['valorPago']?>">
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div>

        <div class="text-center">
            <input type="submit" class="btn btn-success" value="Guardar" onclick="confirmarUpdate()">
            <a href="<?php echo RUTA_URL;?>pagos" class="btn btn-primary">Volver</a>
        </div>
    </form>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php';?>