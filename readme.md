# dev-mora
mora scholarship application development.

# Use
- Make sure you installed and configured : Composer, Git, Mysql, PHP (XAMPP).
- Clone this Project to local machine
- Go to project directory with your CLI (Powershell)
- Run "composer install", to install it's dependencies (vendor)
- Edit .env file (in the main project folder) to meet your database setting
- Run "php artisan migrate:refresh", to make database tables from migration
- Run "php artisan serve", to serve application (http://localhost:8000)
- Open your IDE and have a look

# Dev buat di windows
- Install XAMPP
- Download dan install Composer (https://getcomposer.org/doc/00-intro.md)
- Clone project ke htdocs XAMPP
- Buka cmd/powershell di folder project
- Run "composer install"
- Run "php artisan migrate:refresh"
