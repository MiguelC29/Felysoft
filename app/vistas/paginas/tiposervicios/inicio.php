<?php require RUTA_APP . '/vistas/inc/header.php';?>
<a href="tiposervicios/agregar">Insertar</a>
<table class="table">
    <thead>
        <tr>
            <th>N. de Servicio</th>
            <td>Nombre</td>
            <td>Descripción</td>
            <td>Precio</td>
            <td>Acciones</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach($datos['tiposervicios'] as $tiposervicio) : ?>
            <tr>
                <td><?php echo $tiposervicio->idTipoServicio; ?></td>
                <td><?php echo $tiposervicio->nombre; ?></td>
                <td><?php echo $tiposervicio->descripcion; ?></td>
                <td><?php echo $tiposervicio->precio; ?></td>
                <td><a href="<?php echo RUTA_URL; ?>tiposervicios/editar/<?php echo $tiposervicio->idTipoServicio; ?>">Editar</a></td>
                <td><a href="<?php echo RUTA_URL; ?>tiposervicios/borrar/<?php echo $tiposervicio->idTipoServicio; ?>">Borrar</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php require RUTA_APP . '/vistas/inc/footer.php';?>