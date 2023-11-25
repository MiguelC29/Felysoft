<?php require RUTA_APP . '/vistas/inc/header.php';?>
<a href="generos/agregar">Insertar</a>
<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Descripcion</th>

        </tr>
    </thead>
    <tbody>
    <?php foreach($datos['generos'] as $generos) : ?>
        <tr>
            <td><?php echo $generos->pkIdGenero; ?></td>
            <td><?php echo $generos->nombre; ?></td>
            <td><?php echo $generos->descripcion; ?></td>
            <td><a href="<?php echo RUTA_URL; ?>generos/editar/<?php echo $generos->pkIdGenero; ?>">Editar</a></td>
            <td><a href="<?php echo RUTA_URL; ?>generos/borrar/<?php echo $generos->pkIdGenero; ?>">Borrar</a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<?php require RUTA_APP . '/vistas/inc/footer.php';?>