# Desafio Digital Republic

Prezados senhores,

Este Repositório aloca o Projeto requisitado no [Processo Seletivo da Empresa 'Digital Republic'](https://gitlab.com/digitalrepublic/code-challenge) . O cargo pretendido é o de Desenvoldedor Júnior PHP / Node.

O Projeto está alocado em servidor, podendo ser [acessado online clicando aqui](http://18.230.20.148/) .

## Estrutura do Projeto
O projeto foi desenvolvido no Sistema Operacional [Windows 11](https://www.microsoft.com/en-us/windows/windows-11?r=1)

O projeto foi desenvolvido com [PHP 8.1.0](https://windows.php.net/download#php-8.1)

O projeto foi desenvolvido com o gerenciador de dependências [Composer 2.3.10](https://getcomposer.org/)

O projeto foi desenvolvido com o framework [PHP Laravel 9.19](https://laravel.com/docs/9.x/releases)

O projeto foi desenvolvido com Node 18.14.2, instalado a partir do [NVM](https://github.com/coreybutler/nvm-windows)

O projeto foi desenvolvido no [Visual Studio Code IDE](https://code.visualstudio.com/)

O projeto está alocado em servidor [AWS EC2 Ubuntu Nginx](https://aws.amazon.com/console/)

![image](https://img.shields.io/badge/Windows-017AD7?style=for-the-badge&logo=windows&logoColor=white)
![image](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![image](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![image](https://img.shields.io/badge/Node.js-43853D?style=for-the-badge&logo=node.js&logoColor=white)

![image](https://img.shields.io/badge/Amazon_AWS-232F3E?style=for-the-badge&logo=amazon-aws&logoColor=white)
![image](https://img.shields.io/badge/Linux-E34F26?style=for-the-badge&logo=linux&logoColor=black)
![image](https://img.shields.io/badge/Nginx-009639?style=for-the-badge&logo=nginx&logoColor=white)

## Comandos para executar o Projeto localmente
- Clonar o Projeto via GIT
- Abrir a pasta raiz clonada
- Configurar o arquivo .env a partir do arquivo .env.example
- Comando no terminal: /composer install
- Comando no terminal: /npm install
- Comando no terminal: /php artisan serve
- Comando no terminal: /npm run dev
- Abrir Localhost http://127.0.0.1:8000 com o navegador de preferência

## Testes Unitários
- Para execução dos testes unitários foi utilizada a biblioteca padrão PHPUnit

![image](http://01-unit-test-digital-republic.s3-website-sa-east-1.amazonaws.com/)

- Necessidade de verificar falha associada ao teste 'Validation passes with valid data':
```
The test needs to be updated, since it is only validating the ProjectFormRequest rules() function,
it should also validate the ProjectFormRequest withValidator() function.
```

Atenciosamente,

https://www.linkedin.com/in/rafaeldravelli/
