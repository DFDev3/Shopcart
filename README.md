# Shopcart MVP

Shopcart is a PHP-based MVP for a simple motorcycle accessories e-commerce flow.

It includes:

- Product listing by category.
- Basic search by product name.
- Session-based shopping cart.
- Checkout simulation with client/server validation.

## Project Structure

```
Shopcart/
  assets/
    index.css
    index.js
    search.css
    cart.css
    cart.js
    checkout.css
    checkout.js
    media/
      img/
      ...
  data/
    products.json
    products_dump.php
  legacy/
    hola.php
    components/
      navbar.html
  public/
    index.php
    search.php
    cart.php
    checkout.php
    process_payment.php
  scripts/
    create_product.py
  src/
    bootstrap.php
    Product.php
    ProductCollection.php
    Cart.php
  README.md
```

## Naming And Structure Improvements Applied

- Folder normalization:
  - `ShopCart` -> `public`
  - `Classes` -> `src`
  - `Styles` -> `assets`
  - `Media` -> `assets/media`
- Data and tooling separation:
  - `productos.json` -> `data/products.json`
  - `Media/CrearProducto.py` -> `scripts/create_product.py`
- Route/page normalization:
  - `busqueda.php` -> `search.php`
  - `shopCart.php` -> `cart.php`
  - `PortalDePago.php` -> `checkout.php`
  - `procesar_pago.php` -> `process_payment.php`
- Domain/source naming normalization:
  - `init.php` -> `bootstrap.php`
  - `ProdArray.php` -> `ProductCollection.php`
- Asset naming normalization:
  - `shopcart.css/js` -> `cart.css/js`
  - `PortalDePago.css/js` -> `checkout.css/js`
  - `busqueda.css` -> `search.css`

All internal links/includes were updated to match the new layout.

## Requirements

- PHP 8.0+
- A local server stack (XAMPP, Laragon, WAMP, or PHP built-in server)

## Quick Start

1. Open the repository root.
2. Start a PHP server from the project root:

```bash
php -S localhost:8000
```

3. Open:

```text
http://localhost:8000/public/index.php
```

## Main Routes

- Home: `public/index.php`
- Search: `public/search.php`
- Cart: `public/cart.php`
- Checkout: `public/checkout.php`
- Payment handler: `public/process_payment.php`

## Current MVP Scope

- Uses in-memory/session flow for cart operations.
- Product catalog is hardcoded in PHP bootstrap and sample data files.
- Checkout is a simulation (no payment gateway integration).

## Suggested Next Iterations

1. Move product data to a single source of truth (database or JSON repository layer).
2. Introduce autoloading and namespaces in `src`.
3. Add request validation utilities and centralized error handling.
4. Add tests for cart and checkout flows.
5. Split duplicated page layout into reusable PHP partials.

## Team

- Juan Camilo Yepes
- Robinson Leon
- Emilton Hernandez
- Anghel Gutierrez
- Deniss Diaz
