# Digital Republic Challenge

Estimeed Sirs,

This Repository allocates the Project requested in the [Selection Process of the Company 'Digital Republic'](https://gitlab.com/digitalrepublic/code-challenge) . The intended position is Junior PHP / Node Developer.

Atualmente offline! Servidor em manutenção

The Project is located on a Cloud Server and can be [accessed online by clicking here](http://18.230.20.148/) .

## Project Structure
The project was developed in the Operating System [Windows 11](https://www.microsoft.com/en-us/windows/windows-11?r=1)

The project was developed with [PHP 8.1.0](https://windows.php.net/download#php-8.1)

The project was developed with the dependency manager [Composer 2.3.10](https://getcomposer.org/)

The project was developed with the framework [PHP Laravel 9.19](https://laravel.com/docs/9.x/releases)

The project was developed with Node 18.14.2, installed from [NVM](https://github.com/coreybutler/nvm-windows)

The project was developed in [Visual Studio Code IDE](https://code.visualstudio.com/)

The project is located on server [AWS EC2 Ubuntu Nginx](https://aws.amazon.com/console/)

![image](https://img.shields.io/badge/Windows-017AD7?style=for-the-badge&logo=windows&logoColor=white)
![image](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![image](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![image](https://img.shields.io/badge/Node.js-43853D?style=for-the-badge&logo=node.js&logoColor=white)

![image](https://img.shields.io/badge/Amazon_AWS-232F3E?style=for-the-badge&logo=amazon-aws&logoColor=white)
![image](https://img.shields.io/badge/Linux-E34F26?style=for-the-badge&logo=linux&logoColor=black)
![image](https://img.shields.io/badge/Nginx-009639?style=for-the-badge&logo=nginx&logoColor=white)

## Commands to run the Project locally
- Clone the Project via GIT
- Open cloned root folder
- Configure .env file from .env.example file
- Command in terminal: /composer install
- Command in terminal: /npm install
- Command in terminal: /php artisan serve
- Command in terminal: /npm run dev
- Open Localhost http://127.0.0.1:8000 with preferred browser

## Unitary tests
- To execute the unit tests, the PHPUnit standard library was used

![image](http://01-unit-test-digital-republic.s3-website-sa-east-1.amazonaws.com/)

- Need to verify failure associated with the 'Validation passes with valid data' test:
```
The test needs to be updated, since it is only validating the ProjectFormRequest rules() function,
it should also validate the ProjectFormRequest withValidator() function.
```

Graciously,
