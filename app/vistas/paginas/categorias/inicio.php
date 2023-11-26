<?php require RUTA_APP . '/vistas/inc/header.php';?>
<a href="categorias/agregar" class="btn btn-primary">Insertar</a>
<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($datos['categorias'] as $categoria) : ?>
        <tr>
            <td><?php echo $categoria->pkIdCategoria; ?></td>
            <td><?php echo $categoria->nombre; ?></td>
            <td>
                <a href="<?php echo RUTA_URL; ?>categorias/editar/<?php echo $categoria->pkIdCategoria; ?>" class="btn btn-warning">Editar</a>
                <a href="<?php echo RUTA_URL; ?>categorias/borrar/<?php echo $categoria->pkIdCategoria; ?>" class="btn btn-danger">Borrar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<?php require RUTA_APP . '/vistas/inc/footer.php';?>