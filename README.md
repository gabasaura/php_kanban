# Kanban Board Application

Este proyecto es un tablero de Kanban inspirado en el de GitHub, construido con **Laravel**, **Inertia.js**, **Vue 3**, y **Tailwind CSS**. La aplicación permite organizar tareas en diferentes columnas para gestionar el flujo de trabajo de manera visual.

## Requisitos

- **PHP >= 8.0**
- **Composer**
- **Node.js & npm**
- **MySQL o PostgreSQL** (o cualquier base de datos compatible con Laravel)

## Instalación

```bash

- Configurar el Entorno
Copia el archivo .env.example para crear el archivo de configuración .env:

cp .env.example .env

- Luego, abre .env y ajusta las configuraciones de base de datos y otros detalles necesarios.

- Instala las dependencias de PHP con Composer:

composer install

- Instala las dependencias de JavaScript:

npm install

- Generar Clave de Aplicación

php artisan key:generate

- Ejecutar Migraciones

php artisan migrate

- Compilar Assets
Para compilar los archivos de CSS y JavaScript, ejecuta:

npm run dev

Nota: Usa npm run build para compilar en modo de producción.

- Uso
Inicia el servidor de desarrollo de Laravel:

php artisan serve

Ahora puedes acceder a la aplicación en http://localhost:8000/kanban.
````

## Estructura del Proyecto
Este proyecto utiliza la siguiente estructura:

- **Laravel** como framework backend.
- **Inertia.js** para conectar Laravel con Vue sin una API REST completa.
- **Vue 3** para construir la interfaz del tablero Kanban.
- **Tailwind CSS** para el diseño responsivo y rápido.

## Funcionalidades
Tablero de Kanban básico: incluye columnas para organizar tareas.
Interfaz reactiva: Inertia.js y Vue brindan una experiencia de SPA (Single Page Application) sin la complejidad de una API completa.

## Expansión
Algunas ideas para expandir la funcionalidad incluyen:

- Drag-and-drop: Integrar Vue Draggable para mover tareas entre columnas.
- Persistencia en Base de Datos: Guardar columnas y tareas en la base de datos.
- Autenticación: Personalizar el tablero para cada usuario.
