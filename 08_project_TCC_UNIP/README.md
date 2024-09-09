# Project: RR Sales Administration System

## terminal commands to run project locally
    Your windows machine must be running php 8.2, mysql, node.js and composer

    (lines 7 to 9 have the purpose of creating a project)
    composer create-project laravel/laravel=10^
    composer require laravel/ui
    php artisan ui bootstrap --auth

    Create .env based on .env.example
    composer install
    npm install
    npm run dev
    php artisan migrate --force
    php artisan db:seed
    php artisan serve

## terminal commands to improve project
    php artisan make:migration create_"tablename"_table
    php artisan migrate:refresh

## References used in project - Free for personal and commercial purpose with attribution
<a href="https://www.flaticon.com/free-icons/coin" title="coin icons">Coin icons created by NajmunNahar - Flaticon</a>
