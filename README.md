# 🚀 Laravel 12 API

A **RESTful API** built with the **Laravel 12 framework**, configured for local development using **Laravel Sail**.  
This project serves as a solid starting point for building scalable and maintainable web services.

---

## ✨ Key Features

- **RESTful API:** Implementation of RESTful endpoints for resource management.  
- **Laravel Sail:** Docker-based development environment for a fast and consistent setup.  
- **Data Validation:** Leverages Laravel’s validation system to ensure data integrity.  
- **Route Management:** All API routes are defined in `routes/api.php`.  
- **Eloquent ORM:** Simplified database interactions using Laravel’s ORM.

---

## ⚙️ Requirements

Before you begin, make sure you have the following installed:

- **Docker:** To manage the Sail containers.  
- **Git:** To clone the repository.

---

## 🔧 Installation & Setup

Follow these steps to set up the project locally:

### 1. Clone the repository

Clone the repository from GitHub and navigate into the project directory:

```bash
git clone https://github.com/jorgehernandezch/laravel-12-api.git
cd laravel-12-api
```

### 2. Install Dependencies

Use the Laravel Sail Composer image to install dependencies without requiring a local PHP installation:

```bash
docker run --rm \
  -u "$(id -u):$(id -g)" \
  -v "$(pwd):/var/www/html" \
  -w /var/www/html \
  laravelsail/php84-composer:latest \
  composer install --ignore-platform-reqs
```

### 3. Start the services with Sail

The sail up command builds the Docker images and starts the required containers (PHP, MySQL, etc.).

```bash
# Start in detached mode
./vendor/bin/sail up -d 

# Or in the foreground (to view logs)
# ./vendor/bin/sail up
```

### 4. Configure the .env file

Copy the example environment file and generate a new application key:

```bash
cp .env.example .env
./vendor/bin/sail artisan key:generate 

# Or
sail artisan key:generate 
```

The database host is already configured for Docker (DB_HOST=mysql by default),
so you only need to modify it if you changed the services in the docker-compose.yml file.

### 5. Run database migrations

Apply the migrations to create the necessary tables:

```bash
./vendor/bin/sail artisan migrate --seed
#Or
sail artisan migrate --seed
```

### 6. Access the API
Once everything is running, your API will be available at:

```arduino
http://localhost:8020/api/v1
```

## 🎯 API Endpoints

Below is a list of the available endpoints.  
You can test them using tools such as **Postman** or **cURL**.

| **HTTP Method** | **Endpoint** | **Description** |
| :-------------- | :----------- | :-------------- |
| `GET` | `/api/user` | Retrieves the authenticated user’s information. |
| `DELETE` | `/api/user/delete` | Deletes the authenticated user’s account. |

> **Note:** Replace `{resource}` with your model name (e.g. `posts`, `users`)  
> and `{id}` with the unique resource identifier.

## 🤝 Contributing

Contributions are always welcome! If you’d like to contribute, please open an issue or submit a pull request.

## 📄 License

This project is licensed under the MIT License.

---
[Jorge Edo. Hernández](https://github.com/jorgehernandezch)  
_Engineer and Web Developer_