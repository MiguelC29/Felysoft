<?php require RUTA_APP . '/vistas/inc/header.php'; ?>
<div class="card card-body bg-light mt-5">
    <h2>Editar categoria</h2>
    <form id="formsFelysoft" action="<?php echo RUTA_URL; ?>categorias/editar/<?php echo $datos['pkIdCategoria'] ?>" method="post">
        <div class="form-group">
            <label for="nombre">Nombre: <sup>*</sup></label>
            <input type="text" name="nombre" class="form-control form-control-lg" value="<?php echo $datos['nombre'] ?>" required>
        </div>
        <input type="submit" class="btn btn-success" value="Editar Categoria" onclick='return confirmarUpdate()'>
        <a href="<?php echo RUTA_URL; ?>categorias" class="btn btn-primary">Volver</a>
    </form>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php'; ?>