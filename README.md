# 🚀 API Laravel 12

API RESTful desarrollada con el **framework Laravel 12** y configurada para su entorno de desarrollo con **Laravel Sail**. Este proyecto sirve como un punto de partida para construir servicios web robustos y escalables.

-----

## ✨ Características Principales

  * **API RESTful:** Implementación de endpoints RESTful para la gestión de recursos.
  * **Laravel Sail:** Entorno de desarrollo Docker para un setup rápido y consistente.
  * **Validación de Datos:** Uso de las validaciones de Laravel para asegurar la integridad de los datos.
  * **Gestión de Rutas:** Rutas de API definidas en `routes/api.php`.
  * **ORM Eloquent:** Manejo de la base de datos a través del ORM de Laravel.

-----

## ⚙️ Requisitos

Antes de empezar, asegúrate de tener instalados los siguientes programas:

  * **Docker:** Para gestionar los contenedores de Sail.
  * **Git:** Para clonar el repositorio.

-----

## 🔧 Instalación y Configuración

Sigue estos pasos para configurar el proyecto en tu entorno local:

1.  **Clonar el repositorio:**

    ```bash
    git clone https://github.com/jorgehernandezch/laravel-12-api.git
    cd laravel-12-api
    ```

2.  **Iniciar los servicios con Sail:**
    El comando `sail up` construye las imágenes de Docker y arranca los contenedores de los servicios (PHP, MySQL, etc.).

    ```bash
    # Para arrancar en segundo plano
    ./vendor/bin/sail up -d 

    # Para arrancar en primer plano (útil para ver los logs)
    # ./vendor/bin/sail up
    ```

3.  **Configurar el archivo `.env`:**
    Copia el archivo de ejemplo y genera una clave de aplicación.

    ```bash
    # Usa sail para ejecutar los comandos de artisan
    ./vendor/bin/sail artisan key:generate
    ```

    El host de la base de datos ya está configurado para el servicio de Docker, por lo que no es necesario modificarlo si no cambiaste los servicios en el archivo `docker-compose.yml`. El valor por defecto es `DB_HOST=mysql`.

4.  **Ejecutar migraciones:**
    Aplica las migraciones de la base de datos para crear las tablas necesarias.

    ```bash
    ./vendor/bin/sail artisan migrate
    ```

5.  **Listo para usar:**
    La API estará disponible en `http://localhost`.

-----

## 🎯 Endpoints de la API

A continuación, se describen los endpoints disponibles. Para probarlos, puedes usar herramientas como Postman o cURL.

| Método HTTP | Endpoint | Descripción |
| :--- | :--- | :--- |
| `GET` | `/api/user` | Obtiene la información del usuario autenticado. |
| `DELETE` | `/api/user/delete` | Elimina la cuenta del usuario autenticado. |

**Nota:** Reemplaza `{recurso}` por el nombre de tu modelo (ej. `posts`, `users`) y `{id}` por el identificador único.

-----

## 🤝 Contribuciones

Si deseas contribuir a este proyecto, por favor, abre un "issue" o un "pull request". Todas las contribuciones son bienvenidas.

-----

## 📄 Licencia

Este proyecto está bajo la licencia **MIT**.
