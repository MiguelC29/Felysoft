<?php require RUTA_APP . '/vistas/inc/header.php'; ?>
<a href="ingresos/agregar" class="btn btn-primary">Insertar</a>
<a href="<?php echo RUTA_URL ?>" class="btn btn-primary">Volver</a>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">

                <table id="TablesFelysoft" class="table table-bordered table-hover text-center">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Fecha</th>
                            <th>Monto</th>
                            <th>Venta (Subtotal) </th>
                            <th>Acciones</th>
                        </tr>
                    </thead>    
                    <tbody>
                        <?php foreach ($datos['ingresos'] as $ingreso) : ?>
                            <tr>
                                <td><?php echo $ingreso->pkIdIngreso; ?></td>
                                <td><?php echo $ingreso->fecha; ?></td>
                                <td><?php echo $ingreso->monto; ?></td>
                                <td><?php echo $ingreso->subtotal; ?></td>
                                <td>
                                    <a href="<?php echo RUTA_URL; ?>ingresos/editar/<?php echo $ingreso->pkIdGasto; ?>" class="btn btn-warning">Editar</a>
                                    <a href="<?php echo RUTA_URL; ?>ingresos/borrar/<?php echo $ingreso->pkIdGasto; ?>" class="btn btn-danger">Borrar</a>
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