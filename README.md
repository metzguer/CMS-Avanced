<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## CMS Desarrollado con Laravel 6

Este CMS es un ejemplo de desarrollo de proyecto personal, el software permite realizar publicaciones de forma sencilla y rapida, integrando servicios externos para el almacenamiento de datos como cloudinary y desplegado en la plataforma de Heroku.

## Base de datos Maria DB

Maria DB es un motor de base de datos gratuito, en este proyecto puedes emplear el motor de base de datos PostgreSQL y no te genera inconvenientes, asegurate de revizar la documentacion de la version de Laravel que este empleando en la correccion de posibles errores en el trabajo con el motor de base de datos correspondiente.

## Proceso de instalación

Los pasos que debes realizar para hacer uso de este CMS en tu entorno de desarrollo son los siguientes:

- Ejecutar: composer install, para instalar las dependencias
- Verifica la existencia del archivo .env.example y copia los datos en un archivo con el nombre de .env, pudes usar el comando cp .env.example .env
- Genera una llave de seguridad: php artisan key:generate
- Creacion de la base de datos (nombre de BD: cms_avanced), puede ser postgre o Maria DB.
- Modifica el archivo .env con las credenciales de acceso a tu base de datos (host, database, username y password)
- Ejecuta las migraciones: php artisan migrate
- Si necesitas los seeds puedes usar: php artisan migrate --seed
- Ejecuta npm install
- Ejecuta npm run dev


## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).


