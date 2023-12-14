<?php require RUTA_APP . '/vistas/inc/header.php';?>
<?php require RUTA_APP . '/vistas/inc/sidebar.php'; ?>
<?php require RUTA_APP . '/vistas/inc/navbar.php'; ?>

<div class="contenedor-form">
    <form id="formsFelysoft" action="<?php echo RUTA_URL;?>gastos/editar/<?php echo $datos['pkIdGasto']?>" method="post" novalidate>
        <h2 class="titulo-form">EDITAR GASTO</h2>
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
            <label for="descripcion">Descripción: <sup>*</sup></label>
            <input type="text" name="descripcion" class="form-control form-control-lg" value="<?php echo $datos['descripcion']?>" required>
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div>
  
        <div class="form-group">
            <label for="idCompra">Compra (Total): <sup>*</sup></label>
            <select class="form-select" aria-label="Default select example" name="idCompra">
            <option value = "" selected disabled>Seleccione el total de la compra</option>
            <option value="<?php echo $datos['compra']->pkIdCompra; ?>" selected>
            <?php echo $datos['compra']->total; ?></option>
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
            <select class="form-select" aria-label="Default select example" name="idPago">
            <option value = "" selected disabled>Seleccione el Método de pago</option>            
            <option value="<?php echo $datos['pago']->pkIdPago; ?>" selected><?php echo $datos['pago']->metodoPago; ?></option>
            <?php foreach($datos['pagos'] as $pago) : ?>
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
        <div class="text-center">
            <input type="submit" class="btn btn-success" value="Guardar" onclick="confirmarUpdate()">
            <a href="<?php echo RUTA_URL;?>gastos" class="btn btn-primary">Volver</a>
        </div>
    </form>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php';?>