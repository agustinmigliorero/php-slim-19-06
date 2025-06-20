# CRUD de Videojuegos con Slim 4 y Twig

Este proyecto es un ejemplo básico de una aplicación CRUD (Crear, Leer, Actualizar, Borrar) usando el microframework Slim 4 y el motor de plantillas Twig.

## Requisitos

- PHP 8.0 o superior
- Composer
- MySQL o MariaDB

## Instalación

1. Clonar o descargar este repositorio.

2. Crear una base de datos y ejecutar el script SQL que se encuentra en `db_videogames.sql`.

3. Desde la terminal, en la carpeta raíz del proyecto, ejecutar:

   ```bash
   composer install
   ```

4. Ingresar a la carpeta `public`:

   ```bash
   cd public
   ```

5. Levantar el servidor de desarrollo con PHP:

   ```bash
   php -S localhost:8000
   ```

6. Abrir el navegador en `http://localhost:8000`.

## Estructura del proyecto

- `src/`: Contiene las rutas, controladores y servicios.
- `views/`: Plantillas Twig para las vistas.
- `public/`: Punto de entrada del proyecto (`index.php`).
- `config/`: Archivo de configuración de la conexion a la base de datos.

## Funcionalidades

- Listar videojuegos en una tabla
- Agregar un nuevo videojuego
- Editar un videojuego existente
- Eliminar un videojuego

