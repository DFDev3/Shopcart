import json
import os

# Nombre del archivo JSON
nombre_archivo = "productos.json"

# Función para cargar los datos del archivo JSON
def cargar_productos():
    try:
        with open(nombre_archivo, "r", encoding="utf-8") as archivo_existente:
            return json.load(archivo_existente)
    except FileNotFoundError:
        return []

# Función para guardar los datos en el archivo JSON
def guardar_productos(data):
    with open(nombre_archivo, "w", encoding="utf-8") as archivo:
        json.dump(data, archivo, indent=4, ensure_ascii=False)

# Función para agregar un producto
def agregar_producto():
    id_referencia = input("Ingrese el ID de referencia: ")
    nombre = input("Ingrese el nombre del producto: ")
    precio = float(input("Ingrese el precio del producto: "))
    marca = input("Ingrese la marca del producto: ")
    distribuidor = input("Ingrese el nombre del distribuidor: ")
    id_img = input("Ingrese el ID de la imagen: ")
    producto = {
        "ID de referencia": id_referencia,
        "Nombre": nombre,
        "Precio": precio,
        "Marca": marca,
        "Distribuidor": distribuidor,
        "ID de imagen": id_img,
     
    }

    productos = cargar_productos()
    productos.append(producto)
    guardar_productos(productos)
    print("El producto se ha agregado con éxito.")

# Función para listar todos los productos
def listar_productos():
    productos = cargar_productos()
    for idx, producto in enumerate(productos, start=1):
        print(f"Producto {idx}:")
        for key, value in producto.items():
            print(f"{key}: {value}")
        print()

# Función para eliminar un producto por su ID de referencia
def eliminar_producto():
    id_referencia = input("Ingrese el ID de referencia del producto que desea eliminar: ")
    productos = cargar_productos()

    for producto in productos:
        if producto["ID de referencia"] == id_referencia:
            productos.remove(producto)
            guardar_productos(productos)
            print(f"El producto con ID de referencia {id_referencia} ha sido eliminado.")
            return

    print(f"No se encontró un producto con el ID de referencia {id_referencia}.")

# Función para corregir la observación de un producto por su ID de referencia
def agregar_observacion():
    id_referencia = input("Ingrese el ID de referencia del producto que desea corregir la observación: ")
    observacion_nueva = input("Ingrese la nueva observación para el producto: ")

    productos = cargar_productos()

    for producto in productos:
        if producto["ID de referencia"] == id_referencia:
            producto["Observación"] = observacion_nueva
            guardar_productos(productos)
            print(f"La observación del producto con ID de referencia {id_referencia} ha sido corregida.")
            return

    print(f"No se encontró un producto con el ID de referencia {id_referencia}.")

# Menú principal
while True:
    print("\n--- GESTIÓN DE PRODUCTOS ---")
    print("1. Agregar Producto")
    print("2. Listar Productos")
    print("3. Eliminar Producto")
    print("4. agregar observacion")
    print("5. Salir")
    opcion = input("Seleccione una opción (1/2/3/4/5): ")

    if opcion == "1":
        agregar_producto()
    elif opcion == "2":
        listar_productos()
    elif opcion == "3":
        eliminar_producto()
    elif opcion == "4":
        agregar_observacion()
    elif opcion == "5":
        print("¡Hasta luego!")
        break
    else:
        print("Opción no válida. Por favor, seleccione una opción válida (1/2/3/4/5).")