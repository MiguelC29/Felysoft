<?php require RUTA_APP . '/vistas/inc/header.php'; ?>
<?php require RUTA_APP . '/vistas/inc/sidebar.php'; ?>
<?php require RUTA_APP . '/vistas/inc/navbar.php'; ?>

<div class="contenedor-form">
    <form id="formsFelysoft" action="<?php echo RUTA_URL; ?>roles/agregar" method="post" novalidate>
        <h2 class="titulo-form">AGREGAR ROLES</h2>
        <div class="form-group">
            <label for="nombre">Nombre: <sup>*</sup></label>
            <select class="form-select" aria-label="Default select example" name="nombre" id="nombre" required>
                <option value="" selected disabled>Seleccione el Rol</option>
                <option value="Administrador">Administrador</option>
                <option value="Empleado">Empleado</option>
            </select>
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div>
        <div class="text-center">
            <input class="btn btn-success" type="submit" value="Guardar" onclick="confirmarInsert()">
            <a href="<?php echo RUTA_URL; ?>roles" class="btn btn-primary">Volver</a>
        </div>
    </form>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php'; ?>