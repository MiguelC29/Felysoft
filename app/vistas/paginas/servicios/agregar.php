<?php require RUTA_APP . '/vistas/inc/header.php'; ?>
<div class="contenedor-form">
    <form class="needs-validation" id="formsFelysoft" action="<?php echo RUTA_URL; ?>servicios/agregar" method="post" novalidate>
        <h2 class="titulo-form">AGENDAR SERVICIO</h2>
        <div class="form-group">
            <label for="idTipoServicio">Tipo de Servicio: <sup>*</sup></label>
            <select class="form-select" name="idTipoServicio" id="idTipoServicio" required>
                <option value="" selected disabled>Seleccione el Tipo de Servicio</option>
                <?php foreach ($datos['tiposervicios'] as $tipoServicio) : ?>
                    <option value="<?php echo $tipoServicio->idTipoServicio; ?>" data-precio="<?php echo $tipoServicio->precio; ?>"><?php echo $tipoServicio->nombre; ?></option>
                <?php endforeach; ?>
            </select>
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div>
        <div class="form-group">
            <label for="estado">Estado: <sup>*</sup></label>
            <select class="form-select" name="estado">
                <option select disabled value="seleccionar">Seleccionar estado</option>
                <option value="Activo">Activo</option>
                <option value="Inactivo">Inactivo</option>
                <option value="Pendiente">Pendiente</option>
                <option value="Confirmada">Confirmada</option>
                <option value="Cancelada">Cancelada</option>
            </select>
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div>
        <div class="form-group">
            <label for="precioAdicional">Precio Adicional: <sup>*</sup></label>
            <input type="number" name="precioAdicional" id="precioAdicional" class="form-control form-control-lg" required>
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div>
        <div class="form-group">
            <label for="total">Total: <sup>*</sup></label>
            <input type="number" name="total" id="total" class="form-control form-control-lg" required readonly>
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div>
        <div class="form-group">
            <label for="fechaCreacion">Fecha de Creación: <sup>*</sup></label>
            <input type="datetime-local" name="fechaCreacion" class="form-control form-control-lg" required value="<?php echo (new DateTime())->format('Y-m-d\TH:i:s'); ?>">
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div>
        <div class="form-group">
            <label for="fechaModificacion">Fecha de Modificación: <sup>*</sup></label>
            <input type="datetime-local" name="fechaModificacion" class="form-control form-control-lg" required value="<?php echo (new DateTime())->format('Y-m-d\TH:i:s'); ?>">
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div>
        <div class="text-center">
            <input type="submit" class="btn btn-success" value="Guardar">
            <a href="<?php echo RUTA_URL; ?>servicios" class="btn btn-primary">Volver</a>
        </div>
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
