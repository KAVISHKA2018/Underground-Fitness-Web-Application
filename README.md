# Underground Fitness Web Application

## Overview

Underground Fitness is a PHP-based web application designed for a
gym/fitness center. It provides user authentication, membership plan
details, trainer information, and a contact interface.

## Features

-   User Signup & Login (PHP + MySQL)
-   Membership Plans (All Access, Flexi, Off-Peak)
-   Trainer Profiles
-   User Dashboard
-   Contact Page
-   Responsive UI with images

## Project Structure

Underground-Fitness-Web-Application/
├── Images/          # Image files
├── PHPs/            # PHP backend files
├── Script/          # JavaScript files
├── Styles/          # CSS stylesheets
├── contact.php      # Contact page
├── index.php        # Homepage
├── login.php        # Login page
├── readmore.php     # Read more page
├── signup.php       # Registration page
└── user.php         # User dashboard

## Technologies

-  Backend: PHP 7.4+
-  Database: MySQL
-  Frontend: HTML5, CSS3, JavaScript
-  Framework/Libraries:
    -  Bootstrap (for responsive UI)
    -  jQuery (for enhanced interactivity)
    -  Font Awesome (for icons)
-  Server: Apache/Nginx

## Setup Instructions

1.  Extract the project folder.
2.  Place it inside your server directory:
    -   **XAMPP:** `htdocs/underground_fitness`
3.  Import the database into phpMyAdmin.
4.  Update database connection details inside relevant PHP files.
    $host = 'localhost';
    $dbname = 'underground_fitness';
    $username = 'your_username';
    $password = 'your_password';
6.  Visit:\
    `http://localhost/underground_fitness/index.php`

## Credits

Developed for learning and project demonstration purposes.
