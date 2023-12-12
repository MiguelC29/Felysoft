<?php require RUTA_APP . '/vistas/inc/header.php';?>
<h1 class="text-white text-center mt-2">LISTADO DE LIBROS EN INVENTARIO</h1>
    <!-- <div class="my-2">
        <a href="inventarioLibros/agregar"><i class="bi bi-plus-square-fill" style="font-size: 2rem; color: white;"></i></a>
    </div> -->
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive my-4">
                <table id="TablesFelysoft" class="table table-bordered table-hover text-center" style="width:100%">
                    <thead>
                        <tr>
                            <th>IdLibro</th>
                            <th>Titulo</th>
                            <th>Editorial</th>
                            <th>Precio Hora</th>
                            <th>Autor</th>
                            <th>Género</th>
                            <th>Estado</th>
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
                            <td><?php echo $libro->estado; ?></td>
                            <td>
                            <a data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="<?php echo $libro->pkIdLibro; ?>" class="editar-estado btn btn-success"><i class="bi bi-pencil-square"></i></a>
                                <!-- <a href="<?php echo RUTA_URL; ?>inventarioLibros/editar/<?php echo $libro->pkIdLibro; ?>" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                                <a href="<?php echo RUTA_URL; ?>inventarioLibros/borrar/<?php echo $libro->pkIdLibro; ?>" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></a> -->
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Estado Libro</h1>
                <a type="btn" class="btn-close" href="<?php echo RUTA_URL ?>inventarioLibros" aria-label="Close"></a>
            </div>
            <div class="modal-body">
            <form id="formsFelysoft" action="" method="POST">
                <div class="mb-3">
                    <label for="estadoEntrante" class="col-form-label">Estado:</label>
                    <select class="form-select" aria-label="Default select example" id="estadoEntrante" name="estadoEntrante" required>
                        <option value="" selected disabled>Seleccione la Categoria</option>
                        <option value="Disponible">Disponible</option>
                        <option value="Reservado">Reservado</option>
                    </select>
                </div>
                <div class="text-center">
                    <a type="btn" class="btn btn-secondary me-2" href="<?php echo RUTA_URL ?>inventarioLibros">Cerrar</a>
                    <input type="submit" class="btn btn-primary" value="Guardar">
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php';?>