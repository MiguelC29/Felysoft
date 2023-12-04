<?php require RUTA_APP . '/vistas/inc/header.php';?>
<div class="card card-body bg-light mt-5">
    <h2>Editar ingreso</h2>   

    <form id="formsFelysoft" action="<?php echo RUTA_URL;?>ingresos/editar/<?php echo $datos['pkIdIngreso']?>" method="post" >
        <div class="form-group">
            <label for="fecha">Fecha: <sup>*</sup></label>
            <input type="datetime-local" name="fecha" class="form-control form-control-lg" value="<?php echo $datos['fecha']?>" required>
        </div>

        <div class="form-group">
            <label for="monto">Monto: <sup>*</sup></label>
            <input type="number" name="monto" class="form-control form-control-lg" value="<?php echo $datos['monto']?>" required>
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
        </div>

   
        <input type="submit" class="btn btn-success" value="Editar Ingreso" onclick='return confirmarUpdate()'>
        <a href="<?php echo RUTA_URL;?>ingresos" class="btn btn-primary">Volver</a>
    </form>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php';?>