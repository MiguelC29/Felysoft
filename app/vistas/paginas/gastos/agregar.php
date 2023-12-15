<?php require RUTA_APP . '/vistas/inc/header.php';?>

<div class="contenedor-form">
    <form id="formsFelysoft" action="<?php echo RUTA_URL;?>gastos/agregar" method="post" novalidate>
        <h2 class="titulo-form">AGREGAR GASTOS</h2>
        <div class="form-group">
            <label for="fecha">Fecha: <sup>*</sup></label>
            <input type="datetime-local" name="fecha" class="form-control form-control-lg" required>
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div>
        <div class="form-group">
            <label for="monto">Monto: <sup>*</sup></label>
            <input type="number" name="monto" class="form-control form-control-lg" required>
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción: <sup>*</sup></label>
            <input type="text" name="descripcion" class="form-control form-control-lg" required>
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div>

        <div class="form-group">
            <label for="idCompra">Compra (Total): <sup>*</sup></label>
            <select class="form-select" aria-label="Default select example" name="idCompra" required>
            <option value= "" selected disabled>Seleccione el total de la Compra</option>
            <?php foreach($datos['compras'] as $compra) : ?>
                <option value="<?php echo $compra->pkIdCompra; ?>"><?php echo $compra->total; ?></option>
            <?php endforeach; ?>
            </select>
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div>

        <div class="form-group">
            <label for="idPago">Pago (Método): <sup>*</sup></label>
            <select class="form-select" aria-label="Default select example" name="idPago" required>
                <option value="" selected disabled>Seleccione el método de pago</option>
                <?php foreach ($datos['pagos'] as $pago) : ?>
                    <option value="<?php echo $pago->pkIdPago; ?>"><?php echo $pago->metodoPago; ?></option>
                <?php endforeach; ?>
            </select>
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div> 
        
        <!-- <div class="opciones">
        <label for="idPago">Pago (Método): <sup>*</sup></label>
        <select class="form-select" aria-label="Default select example" name="idPago" required>
            <option value= "" selected disabled>Seleccione el método de pago</option>
                <option value="opcion1">Efectivo</option>
                <option value="opcion2">Transferencia</option>
            </select>
        </div> -->
        <div class="text-center">
            <input type="submit" class="btn btn-success" value="Guardar" onclick="confirmarInsert()">
            <a href="<?php echo RUTA_URL;?>gastos" class="btn btn-primary">Volver</a>
        </div>
    </form>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php';?>