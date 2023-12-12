<?php require RUTA_APP . '/vistas/inc/header.php'; ?>
<div class="contenedor-form">
    <form id="formsFelysoft" action="<?php echo RUTA_URL; ?>productos/editar/<?php echo $datos['pkIdProducto'] ?>" method="post" enctype="multipart/form-data" novalidate>
        <h2 class="titulo-form">EDITAR PRODUCTO</h2>
        <div class="form-group">
            <label for="nombre">Nombre: <sup>*</sup></label>
            <input type="text" name="nombre" class="form-control form-control-lg" value="<?php echo $datos['nombre'] ?>" required>
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div>
        <div class="form-group">
            <label for="marca">Marca: <sup>*</sup></label>
            <input type="text" name="marca" class="form-control form-control-lg" value="<?php echo $datos['marca'] ?>" required>
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div>
        <div class="form-group">
            <label for="precioVenta">Precio Venta: <sup>*</sup></label>
            <input type="number" name="precioVenta" class="form-control form-control-lg" value="<?php echo $datos['precioVenta'] ?>" required>
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div>
        <div class="form-group">
            <label for="fechaVencimiento">Fecha Vencimiento:</label>
            <input type="date" name="fechaVencimiento" class="form-control form-control-lg" value="<?php echo $datos['fechaVencimiento'] ?>">
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div>
        <div class="form-group">
            <label for="nombre">Categoria: <sup>*</sup></label>
            <select class="form-select" aria-label="Default select example" name="idCategoria" required>
                <option value="" selected disabled>Seleccione la Categoria</option>
                <option value="<?php echo $datos['categoria']->pkIdCategoria; ?>" selected>
                    <?php echo $datos['categoria']->nombre; ?></option>
                <?php foreach ($datos['categorias'] as $categoria) : ?>
                    <option value="<?php echo $categoria->pkIdCategoria; ?>"><?php echo $categoria->nombre; ?></option>
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
            <label for="idProveedor">Proveedor: <sup>*</sup></label>
            <select class="form-select" aria-label="Default select example" name="idProveedor" required>
                <option value="" selected disabled>Seleccione el Proveedor</option>
                <option value="<?php echo $datos['proveedor']->pkIdProveedores; ?>" selected>
                    <?php echo $datos['proveedor']->nombre; ?></option>
                <?php foreach ($datos['proveedores'] as $proveedor) : ?>
                    <option value="<?php echo $proveedor->pkIdProveedores; ?>"><?php echo $proveedor->nombre; ?></option>
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
            <div class="mb-3">
                <label for="imagenP">Imagen: <sup>*</sup></label>
                <img width="200px" height="200px" src="data:<?php echo $datos['tipoImgP'] ?>;base64,<?php echo base64_encode($datos['imagenP']) ?>">
                <input class="form-control" type="file" id="formFile" name="imagenP">
            </div>
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div>
        <div class="text-center">
            <input type="submit" class="btn btn-success" value="Editar" onclick="confirmarUpdate()">
            <a href="<?php echo RUTA_URL; ?>productos" class="btn btn-primary">Volver</a>
        </div>
    </form>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php'; ?>