<?php require RUTA_APP . '/vistas/inc/header.php';?>
<a href="libros/agregar" class="btn btn-primary">Insertar</a>
<a href="<?php echo RUTA_URL?>" class="btn btn-primary">Volver</a>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table id="TablesFelysoft" class="table table-bordered table-hover text-center">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Titulo</th>
                            <th>Editorial</th>
                            <th>Descripcion</th>
                            <th>Año de Publicacion</th>
                            <th>Precio Por Hora</th>
                            <th>Autor</th>
                            <th>Genero</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($datos['libros'] as $libro) : ?>
                        <tr>
                            <td><?php echo $libro->pkIdLibro; ?></td>
                            <td><?php echo $libro->titulo; ?></td>
                            <td><?php echo $libro->editorial; ?></td>
                            <td><?php echo $libro->descripcion; ?></td>
                            <td><?php echo $libro->anioPublicacion; ?></td>
                            <td><?php echo $libro->precioHora; ?></td>
                            <td><?php echo $libro->autor; ?></td>
                            <td><?php echo $libro->genero; ?></td>
                            <td>
                                <a href="<?php echo RUTA_URL; ?>libros/editar/<?php echo $libro->pkIdLibro; ?>" class="btn btn-warning">Editar</a>
                                <a href="<?php echo RUTA_URL; ?>libros/borrar/<?php echo $libro->pkIdLibro; ?>" class="btn btn-danger">Borrar</a>
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