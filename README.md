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
| `POST` | `/login` | Authenticates a user and returns an access token. |
| `POST` | `/register/user` | Registers a new user in the system. |
| `POST` | `/forgot-password-token` | Sends a password reset link to the user's email. |
| `POST` | `/reset-password` | Resets the user's password using the provided token. |
| `GET` | `/user` | Retrieves information about the authenticated user. *(Auth required)* |
| `PUT` | `/user/basic-info` | Updates the user's basic information (name, email, etc.). *(Auth required)* |
| `PUT` | `/user/password` | Updates the user's password. *(Auth required)* |
| `PUT` | `/user/personal-data` | Updates the user's personal data (CPF, phone, etc.). *(Auth required)* |
| `PUT` | `/user/social-profile` | Updates the user's social profile links. *(Auth required)* |
| `POST` | `/user/deactivate` | Deactivates the authenticated user's account. *(Auth required)* |
| `DELETE` | `/user/delete` | Permanently deletes the authenticated user's account. *(Auth required)* |
| `POST` | `/logout` | Logs out the authenticated user and invalidates the token. *(Auth required)* |


## 🤝 Contributing

Contributions are always welcome! If you’d like to contribute, please open an issue or submit a pull request.

## 📄 License

This project is licensed under the MIT License.

---
[Jorge Edo. Hernández](https://github.com/jorgehernandezch)  
_Engineer and Web Developer_