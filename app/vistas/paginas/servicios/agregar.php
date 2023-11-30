<?php require RUTA_APP . '/vistas/inc/header.php'; ?>

<div class="card card-body bg-light mt-5">
    <h2>Agendar Servicio</h2>
    <form id="formsFelysoft" action="<?php echo RUTA_URL; ?>servicios/agregar" method="post">
        <div class="form-group">
            <label for="idTipoServicio">Tipo de Servicio: <sup>*</sup></label>
            <select class="form-select" name="idTipoServicio" id="idTipoServicio">
                <option selected disabled>Seleccione el Tipo de Servicio</option>
                <?php foreach ($datos['tiposervicios'] as $tipoServicio) : ?>
                    <option value="<?php echo $tipoServicio->idTipoServicio; ?>" data-precio="<?php echo $tipoServicio->precio; ?>"><?php echo $tipoServicio->nombre; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="estado">Estado: <sup>*</sup></label>
            <select class="form-select" name="estado">
                <option select disabled value="seleccionar">Seleccionar</option>
                <option value="Activo">Activo</option>
                <option value="Inactivo">Inactivo</option>
                <option value="Pendiente">Pendiente</option>
                <option value="Confirmada">Confirmada</option>
                <option value="Cancelada">Cancelada</option>
            </select>
        </div>
        <div class="form-group">
            <label for="precioAdicional">Precio Adicional: <sup>*</sup></label>
            <input type="number" name="precioAdicional" id="precioAdicional" class="form-control form-control-lg" required>
        </div>
        <div class="form-group">
            <label for="total">Total: <sup>*</sup></label>
            <input type="number" name="total" id="total" class="form-control form-control-lg" required readonly>
        </div>
        <div class="form-group">
            <label for="fechaCreacion">Fecha de Creación: <sup>*</sup></label>
            <input type="datetime-local" name="fechaCreacion" class="form-control form-control-lg" required value="<?php echo (new DateTime())->format('Y-m-d\TH:i:s'); ?>">
        </div>
        <div class="form-group">
            <label for="fechaModificacion">Fecha de Modificación: <sup>*</sup></label>
            <input type="datetime-local" name="fechaModificacion" class="form-control form-control-lg" required value="<?php echo (new DateTime())->format('Y-m-d\TH:i:s'); ?>">
        </div>
        <input type="submit" class="btn btn-success" value="Agregar Servicio" onclick='return confirmarInsert()'>
        <a href="<?php echo RUTA_URL; ?>servicios" class="btn btn-primary">Volver</a>
    </form>
</div>

<script>
    // Obtener elementos del DOM
    const precioAdicionalInput = document.getElementById('precioAdicional');
    const idTipoServicioSelect = document.getElementById('idTipoServicio');
    const totalInput = document.getElementById('total');

    // Evento de cambio en el precio adicional o tipo de servicio
    function calcularTotal() {
        // Obtener el precio del tipo de servicio seleccionado
        const precioTipoServicio = parseFloat(idTipoServicioSelect.options[idTipoServicioSelect.selectedIndex].dataset.precio) || 0;

        // Calcular el total sumando el precio adicional y el precio del tipo de servicio
        const total = parseFloat(precioAdicionalInput.value) + precioTipoServicio;

        // Actualizar el valor en el campo total
        totalInput.value = isNaN(total) ? '' : total.toFixed(2);
    }

    // Evento de cambio en el tipo de servicio
    idTipoServicioSelect.addEventListener('change', calcularTotal);

    // Evento de cambio en el precio adicional
    precioAdicionalInput.addEventListener('input', calcularTotal);

    // Calcular el total al cargar la página
    calcularTotal();
</script>

<?php require RUTA_APP . '/vistas/inc/footer.php'; ?>
