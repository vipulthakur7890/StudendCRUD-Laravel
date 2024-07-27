**Student CRUD in Laravel**
This repository contains a Laravel-based implementation of a CRUD (Create, Read, Update, Delete) application for managing student records.

Setup Instructions
Clone the Repository

bash
-------------------------------------------------------------------
git clone https://github.com/vipulthakur7890/StudendCRUD-Laravel.git
Navigate to the Project Directory

bash
-------------------------------------------------------------------
cd StudendCRUD-Laravel
Install Dependencies

Ensure you have Composer installed and run:

bash
-------------------------------------------------------------------
composer install
Create the SQL File

In the root of your Laravel project directory, create a file named student.sql with the following content to set up the student table:

sql
-------------------------------------------------------------------
CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    created_at TIMESTAMP NULL DEFAULT NULL,
    updated_at TIMESTAMP NULL DEFAULT NULL
);
Update the Database Configuration

Open the .env file and update the database configuration to match your MySQL setup:

env
-------------------------------------------------------------------
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password
Run Migrations

Execute the following command to apply the migrations and create the necessary tables:

bash
-------------------------------------------------------------------
php artisan migrate
Run the Application

Start the Laravel development server:

bash
-------------------------------------------------------------------
php artisan serve
Access the application in your web browser at http://localhost:8000.

License
This project is licensed under the MIT License. See the LICENSE file for details.
