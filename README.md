# Laravel Image Manipulation REST API

*A beginner-friendly project walkthrough*

## 🎯 Project Overview

This project is a REST API built using Laravel that demonstrates how to handle image upload and manipulation (resizing, cropping, etc.) in a web API context. You’ll use this project to learn not only Laravel basics, but also REST architecture, token-based authentication, and image processing.

## ✅ What You’ll Learn

* How to set up a Laravel API project from scratch
* How to implement authentication (e.g., using Laravel Sanctum)
* How to upload files/images and process them (resize, crop)
* How to build RESTful endpoints (upload image, list images, delete image)
* How to test API endpoints using Postman or other tools
* How to deploy a Laravel app for production

## 🛠 Technologies Used

* Laravel Framework (PHP)
* Composer for dependency management
* Intervention/Image (or GD library) for image manipulation
* Sanctum (or similar) for token-based API authentication
* MySQL (or SQLite) for database
* Postman collection provided for testing

## 🔧 Installation Steps (for beginners)

1. Clone the repository:

   ```bash
   git clone https://github.com/thecodeholic/laravel-image-manipulation-rest-api.git
   ```
2. Navigate into the project folder:

   ```bash
   cd laravel-image-manipulation-rest-api
   ```
3. Install dependencies with Composer:

   ```bash
   composer install
   ```
4. Copy the example environment file and set up configuration:

   ```bash
   cp .env.example .env
   ```

   Then update `DB_CONNECTION`, `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, and `DB_PASSWORD`.
   You can also use SQLite by setting `DB_CONNECTION=sqlite` and creating `database/database.sqlite`.
5. Generate the application key:

   ```bash
   php artisan key:generate
   ```
6. Run database migrations:

   ```bash
   php artisan migrate
   ```
7. Start the development server:

   ```bash
   php artisan serve
   ```

   Your API will be available at `http://127.0.0.1:8000`.

## 📡 API Endpoints & Usage

* **POST** `/api/register` – register a new user (returns access token)
* **POST** `/api/login` – login and obtain token
* **POST** `/api/images/upload` – upload an image (authenticated)
* **GET** `/api/images` – list uploaded images (authenticated)
* **DELETE** `/api/images/{id}` – delete an image (authenticated)

A `postman_collection.json` file is included in the repository so you can import it and test the endpoints yourself.

## 📌 My Learning Experience

As a beginner:

* I found it helpful to follow the setup steps and slowly understand the folder structure (`app`, `routes/api.php`, `controllers`, `middleware`).
* Uploading an image made me explore how files are stored in Laravel (`storage/app/public`, symbolic link `php artisan storage:link`).
* Writing code to **resize or crop** images helped me understand external libraries like Intervention/Image.
* Working with the API authentication helped me grasp how token-based security works (rather than traditional session/cookie auth).
* Testing with Postman made all the pieces click: request → response, headers → JSON.

## 🧩 Next Steps for Me

* Add more image manipulation features (watermarking, format conversion, thumbnails)
* Add robust error handling and validation (image size, file types)
* Rate-limit the API endpoints for security
* Build a simple frontend (Vue.js or React) that connects to this API
* Deploy the project to production (Heroku or a VPS) and set up proper file storage (S3)

## 📝 Conclusion

This project was a fantastic learning journey. It allowed me to build a real REST API with Laravel, understand file uploads, image processing, and API authentication in a hands-on way. If you’re a beginner too, I highly recommend stepping through each piece—you’ll come away much more comfortable with building APIs and Laravel fundamentals.
