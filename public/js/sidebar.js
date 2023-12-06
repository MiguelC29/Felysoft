document.addEventListener("DOMContentLoaded", function () {
    var sidebar = document.querySelector('.contenedor');
    var almacenLink = document.getElementById('almacen');
    var reservaLink = document.getElementById('reservaLibros');
    var comprasLink = document.getElementById('comprasProv');
    var inventarioLink = document.getElementById('inventarioAll');
    var ventaLink = document.getElementById('venta');

    function updateLinkState() {
      // Verificar si la barra lateral está activa o no
      var isSidebarActive = sidebar.classList.contains('active');

      // Desactivar completamente los enlaces cuando la barra lateral está activa
      if (isSidebarActive) {
        almacenLink.removeAttribute('data-bs-toggle');
        almacenLink.removeAttribute('data-bs-target');
        reservaLink.removeAttribute('data-bs-toggle');
        reservaLink.removeAttribute('data-bs-target');
        comprasLink.removeAttribute('data-bs-toggle');
        comprasLink.removeAttribute('data-bs-target');
        inventarioLink.removeAttribute('data-bs-toggle');
        inventarioLink.removeAttribute('data-bs-target');
        ventaLink.removeAttribute('data-bs-toggle');
        ventaLink.removeAttribute('data-bs-target');
        almacenLink.style.pointerEvents = 'none';
        reservaLink.style.pointerEvents = 'none';
        comprasLink.style.pointerEvents = 'none';
        inventarioLink.style.pointerEvents = 'none';
        ventaLink.style.pointerEvents = 'none';
        
      } else {
        almacenLink.setAttribute('data-bs-toggle', 'collapse');
        almacenLink.setAttribute('data-bs-target', '#almacen');
        reservaLink.setAttribute('data-bs-toggle', 'collapse');
        reservaLink.setAttribute('data-bs-target', '#reservaLibros');
        comprasLink.setAttribute('data-bs-toggle', 'collapse');
        comprasLink.setAttribute('data-bs-target', '#comprasProv');
        inventarioLink.setAttribute('data-bs-toggle', 'collapse');
        inventarioLink.setAttribute('data-bs-target', '#inventarioAll');
        ventaLink.setAttribute('data-bs-toggle', 'collapse');
        ventaLink.setAttribute('data-bs-target', '#venta');
        almacenLink.style.pointerEvents = 'auto';
        reservaLink.style.pointerEvents = 'auto';
        comprasLink.style.pointerEvents = 'auto';
        inventarioLink.style.pointerEvents = 'auto';
        ventaLink.style.pointerEvents = 'auto';
      }
    }

    // Ejecutar al cargar la página y después de que la barra lateral cambie
    updateLinkState();

    // Escuchar cambios en la clase "active" de la barra lateral
    var observer = new MutationObserver(function () {
      updateLinkState();
    });

    // Configurar el observador para observar cambios en la clase "active"
    observer.observe(sidebar, { attributes: true });
  });
