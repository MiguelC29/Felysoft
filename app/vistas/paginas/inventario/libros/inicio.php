<?php require RUTA_APP . '/vistas/inc/header.php';?>
    <div class="my-2">
        <a href="inventarioLibros/agregar"><i class="bi bi-plus-square-fill" style="font-size: 2rem; color: white;"></i></a>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table id="TablesFelysoft" class="table table-bordered table-hover text-center" style="width:100%">
                    <thead>
                        <tr>
                            <th>IdLibro</th>
                            <th>Titulo</th>
                            <th>Editorial</th>
                            <th>Precio Hora</th>
                            <th>Autor</th>
                            <th>Género</th>
                            <th>Stock</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($datos['inventarioLibros'] as $libro) : ?>
                        <tr>
                            <td><?php echo $libro->pkIdLibro; ?></td>
                            <td><?php echo $libro->titulo; ?></td>
                            <td><?php echo $libro->editorial; ?></td>
                            <td><?php echo $libro->precioHora; ?></td>
                            <td><?php echo $libro->autor; ?></td>
                            <td><?php echo $libro->genero; ?></td>
                            <td><?php echo $libro->stock; ?></td>
                            <td>
                                <a href="<?php echo RUTA_URL; ?>inventarioLibros/editar/<?php echo $libro->pkIdLibro; ?>" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                                <a href="<?php echo RUTA_URL; ?>inventarioLibros/borrar/<?php echo $libro->pkIdLibro; ?>" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php require RUTA_APP . '/vistas/inc/footer.php';?>