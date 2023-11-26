<?php require RUTA_APP . '/vistas/inc/header.php';?>
<div class="card card-body bg-light mt-5">
    <h2>Agregar productos</h2>
    <form action="<?php echo RUTA_URL;?>productos/agregar" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="nombre">Nombre: <sup>*</sup></label>
            <input type="text" name="nombre" class="form-control form-control-lg" required>
        </div>
        <div class="form-group">
            <label for="marca">Marca: <sup>*</sup></label>
            <input type="text" name="marca" class="form-control form-control-lg" required>
        </div>
        <div class="form-group">
            <label for="precioVenta">Precio Venta: <sup>*</sup></label>
            <input type="number" name="precioVenta" class="form-control form-control-lg" required>
        </div>
        <div class="form-group">
            <label for="fechaVencimiento">Fecha Vencimiento: <sup>*</sup></label>
            <input type="date" name="fechaVencimiento" class="form-control form-control-lg">
        </div>
        <div class="form-group">
            <label for="idCategoria">Categoria: <sup>*</sup></label>
            <select class="form-select" aria-label="Default select example" name="idCategoria">
            <option selected disabled>Seleccione la Categoria</option>
                <option value="2">Galletas</option>
            </select>
        </div>
        <div class="form-group">
            <label for="idProveedor">Proveedor: <sup>*</sup></label>
            <select class="form-select" aria-label="Default select example" name="idProveedor">
            <option selected disabled>Seleccione el Proveedor</option>
                <option value="108">Festival Galletas S.A.</option>
            </select>
        </div>
        <div class="form-group">
            <div class="mb-3">
                <label for="imagenP">Imagen: <sup>*</sup></label>
                <input class="form-control" type="file" id="formFile" name="imagenP">
            </div>
        </div>
        <input type="submit" class="btn btn-success" value="Agregar Producto">
        <a href="<?php echo RUTA_URL;?>productos" class="btn btn-primary">Volver</a>
    </form>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php';?>