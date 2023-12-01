<?php require RUTA_APP . '/vistas/inc/header.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <form id="formsFelysoft" action="<?php echo RUTA_URL; ?>tiposervicios/editar/<?php echo $datos['idTipoServicio'] ?>"
                    method="post">
                    <div class="card card-body bg-tertiary bg-opacity-50 mt-5">
                        <h2 class="text-center">Editar Servicio</h2>
                        <table class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <th>Nombre <sup>*</sup></th>
                                    <th>Descripción <sup>*</sup></th>
                                    <th>Precio <sup>*</sup></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <input type="text" id="nombre" name="nombre" class="form-control form-control-lgk"
                                            value="<?php echo $datos['nombre'] ?>" required>
                                    </td>
                                    <td>
                                        <input type="text" id="descripcion" name="descripcion" class="form-control form-control-lg"
                                            value="<?php echo $datos['descripcion'] ?>" required>
                                    </td>
                                    <td>
                                        <input type="text" id="precio" name="precio" class="form-control form-control-lg"
                                            value="<?php echo $datos['precio'] ?>" required>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="row">
                            <div class="col-md-6 text-end">
                                <input type="submit" class="btn btn-success mt-3 mb-2 btn-block" value="Editar Servicio" onclick="return confirmarUpdate()">
                            </div>
                            <div class="col-md-6">
                                <a href="<?php echo RUTA_URL; ?>tiposervicios" class="btn btn-primary mt-3 mb-2 px-4 btn-block">Volver</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php'; ?>
