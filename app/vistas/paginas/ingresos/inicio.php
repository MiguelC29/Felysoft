<?php require RUTA_APP . '/vistas/inc/header.php'; ?>
<h1 class="text-white text-center mt-2">LISTADO DE INGRESOS</h1>
    <div class="my-2">
        <a href="ingresos/agregar"><i class="bi bi-plus-square-fill" style="font-size: 2rem; color: white;"></i></a>
    </div>
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
                                    <a href="<?php echo RUTA_URL; ?>ingresos/editar/<?php echo $ingreso->pkIdIngreso; ?>" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                                    <a href="<?php echo RUTA_URL; ?>ingresos/borrar/<?php echo $ingreso->pkIdIngreso; ?>" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php require RUTA_APP . '/vistas/inc/footer.php'; ?>