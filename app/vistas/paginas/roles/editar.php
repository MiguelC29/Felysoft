<?php require RUTA_APP . '/vistas/inc/header.php'; ?>
<?php require RUTA_APP . '/vistas/inc/sidebar.php'; ?>
<?php require RUTA_APP . '/vistas/inc/navbar.php'; ?>

<div class="contenedor-form">
    <form id="formsFelysoft" action="<?php echo RUTA_URL; ?>roles/editar/<?php echo $datos['pkIdRol'] ?>" method="post" novalidate>
        <h2 class="titulo-form">EDITAR ROL</h2>
        <<div class="form-group">
            <label for="nombre">Nombre: <sup>*</sup></label>
            <select class="form-select" aria-label="Default select example" name="nombre" id="nombre" required>
                <option value="" selected disabled>Seleccione el Rol</option>
                <option value="Administrador">Administrador</option>
                <option value="Empleado">Empleado</option>
            </select>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div>
        <div class="text-center">
            <input type="submit" class="btn btn-success" value="Guardar" onclick="confirmarUpdate()">
            <a href="<?php echo RUTA_URL; ?>roles" class="btn btn-primary">Volver</a>
        </div>
    </form>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php'; ?>