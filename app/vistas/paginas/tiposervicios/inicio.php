<?php require RUTA_APP . '/vistas/inc/header.php';?>
<h1 class="text-white text-center mt-2">LISTADO DE TIPO DE SERVICIOS</h1>
    <div class="my-2">
        <a href="tiposervicios/agregar"><i class="bi bi-plus-square-fill" style="font-size: 2rem; color: white;"></i></a>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table id="TablesFelysoft" class="table table-bordered table-hover text-center table-secondary">
                    <thead>
                        <tr>
                            <th>N. de Servicio</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Precio</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($datos['tiposervicios'] as $tiposervicio) : ?>
                        <tr>
                            <td><?php echo $tiposervicio->idTipoServicio; ?></td>
                            <td><?php echo $tiposervicio->nombre; ?></td>
                            <td><?php echo $tiposervicio->descripcion; ?></td>
                            <td><?php echo $tiposervicio->precio; ?></td>
                            <td>
                                <a href="<?php echo RUTA_URL; ?>tiposervicios/editar/<?php echo $tiposervicio->idTipoServicio; ?>" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                                <a href="<?php echo RUTA_URL; ?>tiposervicios/borrar/<?php echo $tiposervicio->idTipoServicio; ?>" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php require RUTA_APP . '/vistas/inc/footer.php';?>