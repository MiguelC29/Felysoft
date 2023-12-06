<?php require RUTA_APP . '/vistas/inc/header.php'; ?>
    <div class="my-2">
        <a href="servicios/agregar"><i class="bi bi-plus-square-fill" style="font-size: 2rem; color: white;"></i></a>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table id="TablesFelysoft" class="table table-bordered table-hover text-center">
                    <thead>
                        <tr>
                            <th>No. de Servicio</th>
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
                                    <a href="<?php echo RUTA_URL; ?>servicios/editar/<?php echo $servicio->pkIdServicio; ?>" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                                    <a href="<?php echo RUTA_URL; ?>servicios/borrar/<?php echo $servicio->pkIdServicio; ?>" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php require RUTA_APP . '/vistas/inc/footer.php'; ?>