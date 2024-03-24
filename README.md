# LIFE Web Application

## Overview
The LIFE Web Application is a comprehensive solution designed to enhance the online experience for users engaging in various wellness services. Developed individually, this project encompasses server-side scripting with PHP, data storage with MySQL, and front-end interactivity through jQuery, Bootstrap, AJAX, and REST.

## Features
- **User Authentication**: Secure login system with password hashing for registered users.
- **Personalized Services**: Dynamic service selection offering yoga, meditation, and stretching activities.
- **Interactive Forms**: Server-side validation of user input to prevent XSS with a customized welcome dashboard.
- **Responsive Design**: Admin portal crafted with Bootstrap for varied device compatibility, without CSS.
- **Data-Driven Interface**: AJAX-powered search functionality and MySQL database integration for user data retrieval.
- **Weather Integration**: Live Melbourne weather display using RESTful services on the admin page.
- **Visual Statistics**: Utilizes third-party jQuery and Bootstrap plugins to graphically represent user engagement data.

## Running the Application
To run the LIFE Web Application, a PHP-enabled server environment is required. Follow these steps to set up the application:

1. Clone the repository to your PHP server's web directory.
2. Import the provided SQL files into your MySQL database to set up the initial data.
3. Configure the database connection settings in your PHP scripts to match your MySQL setup.
4. **Download required media**: Access the [Google Drive link](https://drive.google.com/drive/folders/1poUMqdnB-cb47tIkBgmzeko1O9Eee5eb?usp=sharing) and download the necessary media files. Add these files to the `a2/assets/` directory in your project to ensure all features function correctly.
5. Access the application through the web server's URL, typically `http://localhost/[path-to-application]/a2/index.php` for local setups.

## Dependencies
- PHP
- MySQL
- jQuery
- Bootstrap
- AJAX for asynchronous data operations
- RESTful service for weather data

