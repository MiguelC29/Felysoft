<?php require RUTA_APP . '/vistas/inc/header.php'; ?>
<div class="contenedor-form">
    <form id="formsFelysoft" action="<?php echo RUTA_URL; ?>categorias/agregar" method="post" novalidate>
        <h2 class="titulo-form">AGREGAR CATEGORIAS</h2>
        <div class="form-group">
            <label for="nombre" class="form-label">Nombre: <sup>*</sup></label>
            <input type="text" name="nombre" class="form-control form-control-lg" required>
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div>
        <div class="text-center">
            <input class="btn btn-success" type="submit" value="Agregar" onclick="confirmarInsert()">
            <a href="<?php echo RUTA_URL; ?>categorias" class="btn btn-primary">Volver</a>
        </div>
    </form>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php'; ?>