window.addEventListener("load", function () {
    const adImages = document.querySelectorAll(".ad-slideshow img");
    let currentIndex = 0;

    function showNextImage() {
        // Oculta la imagen actual
        adImages[currentIndex].style.display = "none";

        // Incrementa el índice y asegura que esté dentro del rango válido
        currentIndex = (currentIndex + 1) % adImages.length;

        // Muestra la siguiente imagen
        adImages[currentIndex].style.display = "block";
    }

    // Inicializa la presentación de diapositivas
    showNextImage();

    // Configura un intervalo para cambiar las imágenes cada 3 segundos
    setInterval(showNextImage, 3000);
});

const addToCartButtons = document.querySelectorAll(".add-to-cart");

addToCartButtons.forEach(function(button) {
    button.addEventListener("click", function() {
        const productId = button.getAttribute("data-product-id");
        // Aquí puedes agregar lógica para agregar el producto al carrito (por ejemplo, con una función AJAX)
        alert("Producto " + productId + " agregado al carrito.");
    });
});
