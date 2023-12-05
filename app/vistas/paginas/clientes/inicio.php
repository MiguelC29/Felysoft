<?php require RUTA_APP . '/vistas/inc/header.php';?>
    <div class="my-2">
        <a href="clientes/agregar"><i class="bi bi-plus-square-fill" style="font-size: 2rem; color: white;"></i></a>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table id="TablesFelysoft" class="table table-bordered table-hover text-center">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Fecha de Registro</th>
                            <th>identificacion Cliente</th>

                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($datos['cliente'] as $cliente) : ?>
                        <tr>
                            <td><?php echo $cliente->pkIdCliente; ?></td>
                            <td><?php echo $cliente->fechaRegistro; ?></td>
                            <td><?php echo $cliente->fkIdIdentificacion; ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php require RUTA_APP . '/vistas/inc/footer.php';?>