<?php require RUTA_APP . '/vistas/inc/header.php';?>
<?php require RUTA_APP . '/vistas/inc/sidebar.php'; ?>
<?php require RUTA_APP . '/vistas/inc/navbar.php'; ?>

<h1 class="text-white text-center mt-2">LISTADO DE LIBROS</h1>
    <div class="my-2">
        <a href="libros/agregar"><i class="bi bi-plus-square-fill" style="font-size: 2rem; color: white;"></i></a>
    </div>
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
                            <td><?php echo $libro->nombre_autor; ?></td>
                            <td><?php echo $libro->nombre_genero; ?></td>
                            <td>
                            <a href="<?php echo RUTA_URL; ?>libros/editar/<?php echo $libro->pkIdLibro; ?>" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                                <a href="<?php echo RUTA_URL; ?>libros/borrar/<?php echo $libro->pkIdLibro; ?>" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php require RUTA_APP . '/vistas/inc/footer.php';?>