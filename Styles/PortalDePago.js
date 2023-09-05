function validarFormulario() {
    var nombreTitular = document.getElementById("nombre_titular").value;
    var numeroTarjeta = document.getElementById("numero_tarjeta").value;
    var ccv = document.getElementById("ccv").value;
    var anoExpiracion = document.getElementById("ano_expiracion").value;

    if (nombreTitular === "" || numeroTarjeta === "" || ccv === "") {
        alert("Error: Todos los campos son obligatorios.");
        return false; // Evita que el formulario se envíe
    } else if (anoExpiracion < 24) {
        alert("Error: Su tarjeta ya expiró.");
        return false; // Evita que el formulario se envíe
    } else {
        // Procesar el pago aquí (simulación)
        var totsend = document.getElementById("totsend").value;
        alert("Pago completado. Total a pagar: $" + totsend);

        // Redirigir a index.php después de mostrar el mensaje de éxito
        window.location.href = "index.php";

        return false; // Evita que el formulario se envíe
    }
}