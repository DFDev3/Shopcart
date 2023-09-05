// Función para mostrar el modal con un mensaje
function showModal(message) {
    var modal = document.getElementById("modal");
    var modalMessage = document.getElementById("modal-message");
    modalMessage.textContent = message;
    modal.style.display = "block";
  }
  
  // Función para cerrar el modal
  function closeModal() {
    var modal = document.getElementById("modal");
    modal.style.display = "none";
  }
  
  // Evento para cerrar el modal haciendo clic en la "X"
  var closeButton = document.querySelector(".close");
  if (closeButton) {
    closeButton.addEventListener("click", closeModal);
  }
