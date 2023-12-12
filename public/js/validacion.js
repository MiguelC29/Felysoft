const formulario = document.getElementById('formsFelysoft');

function confirmarUpdate() {
  event.preventDefault()
  if (formulario.checkValidity()) {
    Swal.fire({
      title: "¿Estás seguro?",
      text: "Se actualizarán los datos ingresados.",
      showCancelButton: true,
      confirmButtonText: 'Aceptar',
      cancelButtonText: 'Cancelar',
      icon: 'warning',
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33"
    }).then((result) => {
      if (result.value) {
        formulario.submit(); // Envía el formulario si el usuario decide continuar
      }
    });
  } else {
    // Bootstrap manejará los estilos de validación
    formulario.classList.add('was-validated');
  }
}

function confirmarDelete() {
  event.preventDefault()
  Swal.fire({
    title: "¿Estás seguro?",
    text: "Se eliminarán los datos.",
    showCancelButton: true,
    confirmButtonText: 'Eliminar',
    cancelButtonText: 'Cancelar',
    icon: 'warning',
    confirmButtonColor: "#d33",
    cancelButtonColor: "#3085d6"
  }).then((result) => {
    if (result.value) {
      formulario.submit();
    }
  });
}

function confirmarInsert() {
  event.preventDefault()
  if (formulario.checkValidity()) { //checkValidity valida que el formulario cumpla primero con los required
    Swal.fire({
      title: "¿Estás seguro?",
      text: "Se guardarán los datos ingresados.",
      showCancelButton: true,
      confirmButtonText: 'Aceptar',
      cancelButtonText: 'Cancelar',
      icon: 'warning',
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33"
    }).then((result) => {
      if (result.value) {
        formulario.submit(); // Envía el formulario si el usuario decide continuar
      }
    });
  } else {
    // Bootstrap manejará los estilos de validación
    formulario.classList.add('was-validated');
  }
}