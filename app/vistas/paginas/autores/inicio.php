<?php require RUTA_APP . '/vistas/inc/header.php';?>
<a href="autores/agregar" class="btn btn-primary">Insertar</a>
<a href="<?php echo RUTA_URL?>" class="btn btn-primary">Volver</a>
<table class="table text-center">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Nacionalidad</th>
            <th>Fecha de Nacimiento</th>
            <th>Biografia</th>
            <th>Acciones</th>
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
            <td>
                <a href="<?php echo RUTA_URL; ?>autores/editar/<?php echo $autores->pkIdAutor; ?>" class="btn btn-warning">Editar</a>
                <a href="<?php echo RUTA_URL; ?>autores/borrar/<?php echo $autores->pkIdAutor; ?>" class="btn btn-danger">Borrar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<?php require RUTA_APP . '/vistas/inc/footer.php';?>