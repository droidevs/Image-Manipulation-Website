# My Laravel Image Manipulation API: A Learning Journey

This project is a REST API built with Laravel that I created to teach myself the fundamentals of the framework, RESTful principles, and back-end development. The primary goal was to build a practical application that handles user authentication, data management, and image processing.

## 🚀 Project Overview

This API allows authenticated users to manage photo albums and upload images to be resized. It's built with a versioned API (`v1`) and uses Laravel Sanctum for secure, token-based authentication.

### Core Features:

*   **User Authentication:** Secure user registration and login using Laravel Sanctum.
*   **Album Management:** Authenticated users can create, view, update, and delete their own photo albums.
*   **Image Resizing:** Users can upload an image (or provide a URL) and specify a target width and/or height to resize it. The API supports both pixel and percentage-based dimensions.
*   **Image Organization:** Resized images can be associated with a specific album.
*   **Secure & Private:** All endpoints are protected, and users can only access and manage their own albums and images.

## 📡 API Endpoints

All endpoints are prefixed with `/api/v1` and require a valid Sanctum authentication token.

### Album Management

| Method | Endpoint              | Description                      |
| :----- | :-------------------- | :------------------------------- |
| `GET`  | `/album`              | Get all albums for the user      |
| `POST` | `/album`              | Create a new album               |
| `GET`  | `/album/{album}`      | Get a specific album             |
| `PUT`  | `/album/{album}`      | Update a specific album          |
| `DELETE`| `/album/{album}`      | Delete a specific album          |

### Image Manipulation

| Method | Endpoint                   | Description                                         |
| :----- | :------------------------- | :-------------------------------------------------- |
| `GET`  | `/image`                   | Get all images for the user                         |
| `GET`  | `/image/by-album/{album}`  | Get all images within a specific album              |
| `POST` | `/image/resize`            | Upload and resize an image                          |
| `GET`  | `/image/{image}`           | Get details of a specific resized image             |
| `DELETE`| `/image/{image}`           | Delete a specific image                             |


## 🛠 Technologies Used

*   **Laravel 10:** The core PHP framework.
*   **Laravel Sanctum:** For API token authentication.
*   **Intervention/Image:** For handling image processing and resizing.
*   **MySQL/SQLite:** As the database.
*   **PHP 8.2**

## 🔧 Installation Steps

1.  Clone the repository:
    ```bash
    git clone https://github.com/droidevs/Image-Manipulation-Website.git
    ```
2.  Navigate into the project folder:
    ```bash
    cd PHP-Rest-API
    ```
3.  Install dependencies with Composer:
    ```bash
    composer install
    ```
4.  Copy the example environment file and set up your configuration:
    ```bash
    cp .env.example .env
    ```
    Then update `DB_CONNECTION`, `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, and `DB_PASSWORD` in the `.env` file.

5.  Generate the application key:
    ```bash
    php artisan key:generate
    ```
6.  Run database migrations:
    ```bash
    php artisan migrate
    ```
7.  Start the development server:
    ```bash
    php artisan serve
    ```

## 🧠 Key Things I Learned

This project was a fantastic hands-on experience. Here are some of the key concepts I learned:

*   **API Versioning:** I learned how to structure my API routes with a `v1` prefix, which is a best practice for maintaining APIs over time.
*   **Resourceful Controllers:** Using `Route::apiResource` for the `AlbumController` streamlined the creation of CRUD endpoints and taught me how to follow RESTful conventions.
*   **Form Request Validation:** I created custom request classes (`StoreAlbumRequest`, `ResizeImageRequest`, etc.) to handle validation, which kept my controller methods clean and organized.
*   **API Resources:** I used `AlbumResource` and `ImageManipulationResource` to control the JSON data sent back to the client, which taught me how to format API responses properly.
*   **File System & Image Processing:** I learned how to handle file uploads, create directories dynamically, and use a third-party library (`Intervention/Image`) to perform complex tasks like resizing.
*   **Authorization:** I implemented checks in every controller method to ensure that users could only access and modify their own data, which was a great lesson in API security.
*   **Database Relationships:** I set up relationships between the `User`, `Album`, and `ImageManipulation` models.

## 🚀 Future Improvements

*   Add more image manipulation features (e.g., cropping, watermarking, filters).
*   Implement robust error handling and more detailed validation (e.g., max file size, allowed MIME types).
*   Add API rate limiting to prevent abuse.
*   Build a simple front-end (using Vue.js or React) to consume this API.
