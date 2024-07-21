# Laravel 9.0 Essential Training

Estimeed Sirs,

I recommend the course “Laravel 9.0 Essential Training” by Shruti Balasa. Skills covered: WSL, Sail Docker Containers, PHP Laravel 10, MySQL, Breeze for Authentication, Eloquent Relationships and CRUD.

This Repository allocates my applied project base on [Linkedin Learning course by Shruti Balasa](https://www.linkedin.com/learning/?trk=sem-ga_campid.17484605195_asid.134975982462_crid.603529745452_kw.linkedin%20learning_d.c_tid.kwd-310582843911_n.g_mt.e_geo.1001773)

## Project Structure
The project was developed in the Operating System [Windows 11](https://www.microsoft.com/en-us/windows/windows-11?r=1)

The project was developed in the CLI [WSL2](https://learn.microsoft.com/pt-br/windows/wsl/install)

The project was developed with [Docker](https://www.docker.com/)

![image](https://img.shields.io/badge/Windows-017AD7?style=for-the-badge&logo=windows&logoColor=white)
![image](https://img.shields.io/badge/Linux-E34F26?style=for-the-badge&logo=linux&logoColor=black)
![image](https://img.shields.io/badge/Docker-2496ED?style=for-the-badge&logo=docker&logoColor=white)

Docker will create containers for for the other necessary components, so they don't need to be locally installed:

Dependency manager [Composer 2.3.10](https://getcomposer.org/)

Language [PHP 8.1](https://windows.php.net/download#php-8.1)

Framework [PHP Laravel 10.10](https://laravel.com/docs/9.x/releases)

Node 18.14.2 [NVM](https://github.com/coreybutler/nvm-windows)

![image](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![image](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![image](https://img.shields.io/badge/Node.js-43853D?style=for-the-badge&logo=node.js&logoColor=white)

## Commands to run the Project locally
- Clone the Project via GIT
- Navigate into the project directory
- Command in terminal: cp .env.example .env
- Command in terminal:
```
docker run --rm \
-u "$(id -u):$(id -g)" \
-v $(pwd):/var/www/html \
-w /var/www/html \
laravelsail/php81-composer:latest \
composer install --ignore-platform-reqs
npm install
npm run build
```
- Command in terminal: sail up
- Command in auxiliary terminal: sail artisan key:generate
- Command in auxiliary terminal: sail artisan migrate

Graciously,
