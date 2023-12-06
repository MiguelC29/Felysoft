document.addEventListener('DOMContentLoaded', function() {
    const editarBotones = document.querySelectorAll('.editar-stock');
    
    editarBotones.forEach(function(boton) {
        boton.addEventListener('click', function(e) {
            e.preventDefault();
            
            const idProducto = this.getAttribute('data-id');
            const formulario = document.getElementById('formsFelysoft');
            const action = "http://localhost/Felysoft/inventarioProductos/agregarStock/" + idProducto;
            
            formulario.action = action;

            // Abre el modal
            const modal = new bootstrap.Modal(document.getElementById('exampleModal'));
            modal.show();
        });
    });
});