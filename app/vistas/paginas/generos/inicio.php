<?php require RUTA_APP . '/vistas/inc/header.php';?>
<a href="generos/agregar" class="btn btn-primary">Insertar</a>
<a href="<?php echo RUTA_URL?>" class="btn btn-primary">Volver</a>
<table class="table text-center">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($datos['generos'] as $generos) : ?>
        <tr>
            <td><?php echo $generos->pkIdGenero; ?></td>
            <td><?php echo $generos->nombre; ?></td>
            <td><?php echo $generos->descripcion; ?></td>
            <td>
                <a href="<?php echo RUTA_URL; ?>generos/editar/<?php echo $generos->pkIdGenero; ?>" class="btn btn-warning">Editar</a>
                <a href="<?php echo RUTA_URL; ?>generos/borrar/<?php echo $generos->pkIdGenero; ?>" class="btn btn-danger">Borrar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<?php require RUTA_APP . '/vistas/inc/footer.php';?>