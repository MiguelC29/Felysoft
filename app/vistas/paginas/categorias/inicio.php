<?php require RUTA_APP . '/vistas/inc/header.php';?>
<a href="categorias/agregar" class="btn btn-primary">Insertar</a>
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
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($datos['categorias'] as $categoria) : ?>
                        <tr>
                            <td><?php echo $categoria->pkIdCategoria; ?></td>
                            <td><?php echo $categoria->nombre; ?></td>
                            <td>
                                <a href="<?php echo RUTA_URL; ?>categorias/editar/<?php echo $categoria->pkIdCategoria; ?>" class="btn btn-warning">Editar</a>
                                <a href="<?php echo RUTA_URL; ?>categorias/borrar/<?php echo $categoria->pkIdCategoria; ?>" class="btn btn-danger">Borrar</a>
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