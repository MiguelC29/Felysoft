<?php require RUTA_APP . '/vistas/inc/header.php';?>
<a href="generos/agregar" class="btn btn-primary">Insertar</a>
<a href="<?php echo RUTA_URL?>" class="btn btn-primary">Volver</a>
<div class="container">
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
                                <a href="<?php echo RUTA_URL; ?>generos/editar/<?php echo $generos->pkIdGenero; ?>" class="btn btn-warning">Editar</a>
                                <a href="<?php echo RUTA_URL; ?>generos/borrar/<?php echo $generos->pkIdGenero; ?>" class="btn btn-danger">Borrar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php';?>