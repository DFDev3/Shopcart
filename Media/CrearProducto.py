import json

# Solicitar información al usuario
id_referencia = input("Ingrese el ID de referencia: ")
nombre = input("Ingrese el nombre del producto: ")
precio = float(input("Ingrese el precio del producto: "))
marca = input("Ingrese la marca del producto: ")
distribuidor = input("Ingrese el nombre del distribuidor: ")
id_img = input("Ingrese el ID de la imagen: ")
observacion = input("Ingrese una observación para el producto: ")

# Crear un diccionario con la información ingresada
producto = {
    "ID de referencia": id_referencia,
    "Nombre": nombre,
    "Precio": precio,
    "Marca": marca,
    "Distribuidor": distribuidor,
    "ID de imagen": id_img,
    "Observación": observacion  # Agregar el campo de observación
}

# Escribir el diccionario en un archivo JSON
nombre_archivo = "productos.json"

# Verificar si el archivo ya existe
try:
    with open(nombre_archivo, "r") as archivo_existente:
        data = json.load(archivo_existente)
except FileNotFoundError:
    data = []

data.append(producto)

with open(nombre_archivo, "w") as archivo:
    json.dump(data, archivo, indent=4)

print(f"Los datos se han guardado en {nombre_archivo}.")