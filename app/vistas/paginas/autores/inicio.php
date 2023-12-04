<?php require RUTA_APP . '/vistas/inc/header.php';?>
<div class="my-2">
    <a href="autores/agregar"><i class="bi bi-plus-square-fill" style="font-size: 2rem; color: white;"></i></a>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
            <table id="TablesFelysoft" class="table table-bordered table-hover text-center">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Nacionalidad</th>
                        <th>Fecha de Nacimiento</th>
                        <th>Biografia</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($datos['autores'] as $autores) : ?>
                    <tr>
                        <td><?php echo $autores->pkIdAutor; ?></td>
                        <td><?php echo $autores->nombre; ?></td>
                        <td><?php echo $autores->nacionalidad; ?></td>
                        <td><?php echo $autores->fechaNacim; ?></td>
                        <td><?php echo $autores->biografia; ?></td>
                        <td>
                            <a href="<?php echo RUTA_URL; ?>autores/editar/<?php echo $autores->pkIdAutor; ?>" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                            <a href="<?php echo RUTA_URL; ?>autores/borrar/<?php echo $autores->pkIdAutor; ?>" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>              
<?php require RUTA_APP . '/vistas/inc/footer.php';?>