# Digiliza Selective Process - Restaurant Booking System

Estimeed Sirs,

This Repository allocates my applied project for [Digiliza Company](https://www.digiliza.com.br/) selective process. The position I'm applying for is Web System Developer.

## Project Structure
The project was developed in:
- [Windows 11 Operating System](https://www.microsoft.com/en-us/windows/windows-11?r=1)
- [Composer 2.3.10 Dependency manager](https://getcomposer.org/)
- [Language PHP 8.2.6](https://windows.php.net/download/)
- [PHP Step Debugging with XDebug 3.2.1](https://xdebug.org/)
- [Framework PHP Laravel 8.83](https://laravel.com/docs/9.x/releases)
- [Node.js 18, installed from NVM](https://github.com/coreybutler/nvm-windows)
- [Tailwindcss 3.0.18](https://tailwindcss.com/)
- [MySQL Server + Workbench ambient](https://dev.mysql.com/downloads/installer/)

![image](https://img.shields.io/badge/Windows-017AD7?style=for-the-badge&logo=windows&logoColor=white)
![image](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![image](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![image](https://img.shields.io/badge/Node.js-43853D?style=for-the-badge&logo=node.js&logoColor=white)
![image](https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)
![image](https://img.shields.io/badge/MySQL-00000F?style=for-the-badge&logo=mysql&logoColor=white)

## Commands to run the Project locally
- Clone the Project via GIT;
- Navigate into the project directory;
- Create a 'laravel' Database in mysql;
- Command in cmd terminal:
```
composer install

cp .env.example .env

npm install && npm run dev

php artisan key:generate

php artisan migrate

php artisan db:seed

php artisan serve
```
- Open Localhost http://127.0.0.1:8000 with preferred browser;
- Logins allowed:
```
Login: administrador1@laravel.com Password:password
Login: administrador2@laravel.com Password:password
Login: administrador3@laravel.com Password:password
Login: administrador4@laravel.com Password:password
Login: administrador5@laravel.com Password:password
```
## Application Screenshots
![image](http://projects-php-laravel-05-screenshot-01.s3-website-sa-east-1.amazonaws.com/)
![image](http://projects-php-laravel-05-screenshot-02.s3-website-sa-east-1.amazonaws.com/)
![image](http://projects-php-laravel-05-screenshot-03.s3-website-sa-east-1.amazonaws.com/)

## Unit and Integration Tests using PHP Unit
![image](http://projects-php-laravel-05-screenshot-04.s3-website-us-east-1.amazonaws.com/)

Commands to run test locally:
```
php artisan migrate:fresh

php artisan db:seed

php artisan test
```

Graciously,
