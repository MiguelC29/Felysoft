<?php require RUTA_APP . '/vistas/inc/header.php';?>
<div class="card card-body bg-light mt-5">
    <h2>Editar producto</h2>

    <form action="<?php echo RUTA_URL;?>productos/editar/<?php echo $datos['pkIdProducto']?>" method="post">
        <div class="form-group">
            <label for="nombre">Nombre: <sup>*</sup></label>
            <input type="text" name="nombre" class="form-control form-control-lg" value="<?php echo $datos['nombre']?>">
        </div>
        <div class="form-group">
            <label for="nombre">Marca: <sup>*</sup></label>
            <input type="text" name="marca" class="form-control form-control-lg" value="<?php echo $datos['marca']?>">
        </div>
        <div class="form-group">
            <label for="nombre">Precio Venta: <sup>*</sup></label>
            <input type="number" name="precioVenta" class="form-control form-control-lg" value="<?php echo $datos['precioVenta']?>">
        </div>
        <div class="form-group">
            <label for="nombre">Fecha Vencimiento: <sup>*</sup></label>
            <input type="date" name="fechaVencimiento" class="form-control form-control-lg" value="<?php echo $datos['fechaVencimiento']?>">
        </div>
        <div class="form-group">
            <label for="nombre">Categoria: <sup>*</sup></label>
            <select class="form-select" aria-label="Default select example" name="idCategoria">
            <option selected disabled>Seleccione la Categoria</option>
                <option value="2" selected>Galletas</option>
            </select>
        </div>
        <div class="form-group">
            <label for="nombre">Proveedor: <sup>*</sup></label>
            <select class="form-select" aria-label="Default select example" name="idProveedor">
            <option selected disabled>Seleccione el Proveedor</option>
                <option value="108" selected>Festival Galletas S.A.</option>
            </select>
        </div>
        <div class="form-group">
            <div class="mb-3">
                <label for="nombre">Imagen: <sup>*</sup></label>
                <input class="form-control" type="file" id="formFile" name="imagen">
            </div>
        </div>
        <input type="submit" class="btn btn-success" value="Editar Producto">
        <a href="<?php echo RUTA_URL;?>productos" class="btn btn-primary">Volver</a>
    </form>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php';?>