<?php require RUTA_APP . '/vistas/inc/header.php';?>
<a href="tiposervicios/agregar" class="btn btn-primary">Insertar</a>
<a href="<?php echo RUTA_URL?>" class="btn btn-primary">Volver</a>
<table class="table text-center">
    <thead>
        <tr>
            <th>N. de Servicio</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($datos['tiposervicios'] as $tiposervicio) : ?>
            <tr>
                <td><?php echo $tiposervicio->idTipoServicio; ?></td>
                <td><?php echo $tiposervicio->nombre; ?></td>
                <td><?php echo $tiposervicio->descripcion; ?></td>
                <td><?php echo $tiposervicio->precio; ?></td>
                <td>
                    <a href="<?php echo RUTA_URL; ?>tiposervicios/editar/<?php echo $tiposervicio->idTipoServicio; ?>" class="btn btn-warning">Editar</a>
                    <a href="<?php echo RUTA_URL; ?>tiposervicios/borrar/<?php echo $tiposervicio->idTipoServicio; ?>" class="btn btn-danger">Borrar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php require RUTA_APP . '/vistas/inc/footer.php';?>