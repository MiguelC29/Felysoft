<?php require RUTA_APP . '/vistas/inc/header.php'; ?>
<div class="card card-body bg-light mt-5">
    <h2>Agregar proveedores</h2>
    <form id="formsFelysoft" action="<?php echo RUTA_URL; ?>proveedores/agregar" method="post">
        <div class="form-group">
            <label for="nit">NIT: <sup>*</sup></label>
            <input type="text" name="nit" class="form-control form-control-lg" required>
        </div>
        <div class="form-group">
            <label for="nombre">Nombre: <sup>*</sup></label>
            <input type="text" name="nombre" class="form-control form-control-lg" required>
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono: <sup>*</sup></label>
            <input type="number" name="telefono" class="form-control form-control-lg" required>
        </div>
        <div class="form-group">
            <label for="email">Email: <sup>*</sup></label>
            <input type="email" name="email" class="form-control form-control-lg" required>
        </div>
        <input type="submit" class="btn btn-success" value="Agregar Proveedor" onclick='return confirmarInsert()'>
        <a href="<?php echo RUTA_URL; ?>proveedores" class="btn btn-primary">Volver</a>
    </form>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php'; ?>