document.addEventListener('DOMContentLoaded', function() {
    const editarBotones = document.querySelectorAll('.editar-estado');
    
    editarBotones.forEach(function(boton) {
        boton.addEventListener('click', function(e) {
            e.preventDefault();
            
            const idLibro = this.getAttribute('data-id');
            const formulario = document.getElementById('formsFelysoft');
            const action = "http://localhost/Felysoft/inventarioLibros/agregarEstado/" + idLibro;
            
            formulario.action = action;

            // Abre el modal
            const modal = new bootstrap.Modal(document.getElementById('exampleModal'));
            modal.show();
        });
    });
});