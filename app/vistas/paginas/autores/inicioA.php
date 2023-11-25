<?php require RUTA_APP . '/vistas/inc/header.php';?>
<a href="autores/agregar">Insertar</a>
<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Nacionalidad</th>
            <th>Fecha de Nacimiento</th>
            <th>Biografia</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($datos['autores'] as $autores) : ?>
        <tr>
            <td><?php echo $autores->pkIdAutor; ?></td>
            <td><?php echo $autores->nombre; ?></td>
            <td><?php echo $autores->nacionalidad; ?></td>
            <td><?php echo $autores->fechaNacim; ?></td>
            <td><?php echo $autores->biografia; ?></td>
            <td><a href="<?php echo RUTA_URL; ?>autores/editar/<?php echo $autores->pkIdAutor; ?>">Editar</a></td>
            <td><a href="<?php echo RUTA_URL; ?>autores/borrar/<?php echo $autores->pkIdAutor; ?>">Borrar</a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<?php require RUTA_APP . '/vistas/inc/footer.php';?>