<?php require RUTA_APP . '/vistas/inc/header.php'; ?>
<div class="card card-body bg-light mt-5">
    <h2>Borrar producto</h2>
    <form id="formsFelysoft" action="<?php echo RUTA_URL; ?>productos/borrar/<?php echo $datos['pkIdProducto'] ?>"
        method="post">
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" class="form-control form-control-lg" value="<?php echo $datos['nombre'] ?>"
                readonly>
        </div>
        <div class="form-group">
            <label for="marca">Marca:</label>
            <input type="text" name="marca" class="form-control form-control-lg" value="<?php echo $datos['marca'] ?>"
                readonly>
        </div>
        <div class="form-group">
            <label for="precioVenta">Precio Venta:</label>
            <input type="number" name="precioVenta" class="form-control form-control-lg"
                value="<?php echo $datos['precioVenta'] ?>" readonly>
        </div>
        <div class="form-group">
            <label for="fechaVencimiento">Fecha Vencimiento:</label>
            <input type="date" name="fechaVencimiento" class="form-control form-control-lg"
                value="<?php echo $datos['fechaVencimiento'] ?>" readonly>
        </div>
        <div class="form-group">
            <label for="categoria">Categoria:</label>
            <input type="text" name="categoria" class="form-control form-control-lg"
                value="<?php echo $datos['nomCat'] ?>" readonly>
        </div>
        <div class="form-group">
            <label for="proveedor">Proveedor:</label>
            <input type="text" name="proveedor" class="form-control form-control-lg"
                value="<?php echo $datos['nomPro'] ?>" readonly>
        </div>
        <div class="form-group">
            <div class="mb-3">
                <label for="nombre">Imagen:</label>
                <td><img width="200px" height="200px"
                        src="data:<?php echo $datos['tipoImg'] ?>;base64,<?php echo base64_encode($datos['imagen']) ?>">
                </td>
            </div>
        </div>
        <input type="submit" class="btn btn-success" value="Borrar Producto" onclick='return confirmarDelete()'>
        <a href="<?php echo RUTA_URL; ?>productos" class="btn btn-primary">Volver</a>
    </form>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php'; ?>