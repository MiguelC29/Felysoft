<?php require RUTA_APP . '/vistas/inc/header.php'; ?>

<div class="contenedor-form">
    <form id="formsFelysoft" action="<?php echo RUTA_URL; ?>proveedores/editar/<?php echo $datos['pkIdProveedores'] ?>" method="post" novalidate>
        <h2 class="titulo-form">EDITAR PROVEEDOR</h2>
        <div class="form-group">
            <label for="nit">NIT: <sup>*</sup></label>
            <input type="text" name="nit" class="form-control form-control-lg" value="<?php echo $datos['nit'] ?>" required>
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div>
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
            <label for="telefono">Teléfono: <sup>*</sup></label>
            <input type="number" name="telefono" class="form-control form-control-lg" value="<?php echo $datos['telefono'] ?>" required>
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div>
        <div class="form-group">
            <label for="email">Email: <sup>*</sup></label>
            <input type="email" name="email" class="form-control form-control-lg" value="<?php echo $datos['email'] ?>" required>
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div>
        <div class="text-center">
            <input type="submit" class="btn btn-success" value="Guardar" onclick="confirmarUpdate()">
            <a href="<?php echo RUTA_URL; ?>proveedores" class="btn btn-primary">Volver</a>
        </div>
    </form>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php'; ?>