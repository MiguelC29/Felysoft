<?php require RUTA_APP . '/vistas/inc/header.php'; ?>
<a href="usuarios/agregar" class="btn btn-primary">Insertar</a>
<a href="<?php echo RUTA_URL ?>" class="btn btn-primary">Volver</a>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="table">

                <table class="table table-bordered table-hover text-center">
                    <thead>
                        <tr>
                            <th>Identificación</th>
                            <th>Tipo Documento</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Dirección</th>
                            <th>Teléfono</th>
                            <th>Email</th>
                            <th>Género</th>
                            <th>Usuario</th>
                            <th>Contraseña</th>
                            <th>Rol (Nombre)</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($datos['usuarios'] as $usuario) : ?>
                            <tr>
                                <td><?php echo $usuario->pkIdIdentificacion; ?></td>
                                <td><?php echo $usuario->tipoDocu; ?></td>
                                <td><?php echo $usuario->nombres; ?></td>
                                <td><?php echo $usuario->apellidos; ?></td>
                                <td><?php echo $usuario->direccion; ?></td>
                                <td><?php echo $usuario->telefono; ?></td>
                                <td><?php echo $usuario->email; ?></td>
                                <td><?php echo $usuario->genero; ?></td>
                                <td><?php echo $usuario->usuario; ?></td>
                                <td><?php echo $usuario->contrasena; ?></td>
                                <td><?php echo $usuario->nombre; ?></td>
                                <td>
                                    <a href="<?php echo RUTA_URL; ?>usuarios/editar/<?php echo $usuario->pkIdIdentificacion; ?>" class="btn btn-warning">Editar</a>
                                    <a href="<?php echo RUTA_URL; ?>usuarios/borrar/<?php echo $usuario->pkIdIdentificacion; ?>" class="btn btn-danger">Borrar</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php require RUTA_APP . '/vistas/inc/footer.php'; ?>