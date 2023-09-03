document.addEventListener("DOMContentLoaded", function () {
    const addToCartButtons = document.querySelectorAll(".add-to-cart");
    const cartItemsList = document.getElementById("cart-items");
    const cartTotal = document.getElementById("cart-total");
    const checkoutButton = document.getElementById("checkout-button");

    const cart = [];

    addToCartButtons.forEach(function (button) {
        button.addEventListener("click", function () {
            const productId = button.getAttribute("data-product-id");
            const productInfo = {
                id: productId,
                name: "Producto " + productId,
                price: 10.00, // Precio del producto
            };

            cart.push(productInfo);
            updateCart();
        });
    });

    function updateCart() {
        cartItemsList.innerHTML = "";
        let total = 0;

        cart.forEach(function (item) {
            const listItem = document.createElement("li");
            listItem.innerHTML = `${item.name} - $${item.price.toFixed(2)}`;
            cartItemsList.appendChild(listItem);
            total += item.price;
        });

        cartTotal.textContent = total.toFixed(2);
    }

    checkoutButton.addEventListener("click", function () {
        // Aquí puedes implementar la lógica de procesamiento de pago y registro del pedido en el servidor
        alert("Procesando el pedido. Total: $" + cartTotal.textContent);
    });
});
