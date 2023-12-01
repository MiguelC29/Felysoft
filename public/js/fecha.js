function updateDateTime() {
    var dateTimeElement = document.getElementById("datetime");
    var now = new Date();
    var dateTimeString = now.toLocaleString(); // Puedes ajustar el formato según tus preferencias
    dateTimeElement.textContent = dateTimeString;
}

// Llamar a la función inicialmente para mostrar la fecha y hora al cargar la página
updateDateTime();

// Configurar un intervalo para actualizar la fecha y hora cada segundo
setInterval(updateDateTime, 1000);