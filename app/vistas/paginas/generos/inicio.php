<?php require RUTA_APP . '/vistas/inc/header.php';?>
    <div class="my-2">
        <a href="generos/agregar"><i class="bi bi-plus-square-fill" style="font-size: 2rem; color: white;"></i></a>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table id="TablesFelysoft" class="table table-bordered table-hover text-center">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($datos['generos'] as $generos) : ?>
                        <tr>
                            <td><?php echo $generos->pkIdGenero; ?></td>
                            <td><?php echo $generos->nombre; ?></td>
                            <td><?php echo $generos->descripcion; ?></td>
                            <td>
                                <a href="<?php echo RUTA_URL; ?>generos/editar/<?php echo $generos->pkIdGenero; ?>" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                                <a href="<?php echo RUTA_URL; ?>generos/borrar/<?php echo $generos->pkIdGenero; ?>" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php require RUTA_APP . '/vistas/inc/footer.php';?>