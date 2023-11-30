<?php require RUTA_APP . '/vistas/inc/header.php'; ?>
<a href="<?php echo RUTA_URL; ?>servicios/agregar" class="btn btn-primary">Insertar</a>
<a href="<?php echo RUTA_URL; ?>" class="btn btn-primary">Volver</a>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table id="TablesFelysoft" class="table table-bordered table-hover text-center">
                    <thead>
                        <tr>
                            <th>ID de Servicio</th>
                            <th>Estado</th>
                            <th>Fecha de Creación</th>
                            <th>Fecha de Modificación</th>
                            <th>Precio Adicional</th>
                            <th>Total</th>
                            <th>Tipo de Servicio</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($datos['servicios'] as $servicio) : ?>
                            <tr>
                                <td><?php echo $servicio->pkIdServicio; ?></td>
                                <td><?php echo $servicio->estado; ?></td>
                                <td><?php echo $servicio->fechaCreacion; ?></td>
                                <td><?php echo $servicio->fechaModificacion; ?></td>
                                <td><?php echo $servicio->precioAdicional; ?></td>
                                <td><?php echo $servicio->total; ?></td>
                                <td><?php echo $servicio->nombreTipoServicio; ?></td>
                                <td>
                                    <a href="<?php echo RUTA_URL; ?>servicios/editar/<?php echo $servicio->pkIdServicio; ?>"
                                        class="btn btn-warning">Editar</a>
                                    <a href="<?php echo RUTA_URL; ?>servicios/borrar/<?php echo $servicio->pkIdServicio; ?>"
                                        class="btn btn-danger">Borrar</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php'; ?>