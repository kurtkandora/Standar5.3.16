# Laravel 5.3.16 para PhpStorm

Instalación de laravel para que funcione perfectamente en PhpStorm

## Créditos

Tutorial sacado de:

https://www.youtube.com/watch?v=QSZK1W0fbGQ

## Tareas realizadas

Instalación de paquetes:

Laravel-ide-helper
https://github.com/barryvdh/laravel-ide-helper

Laravel-lang
https://github.com/caouecs/Laravel-lang

Laravelcollective/html
https://laravelcollective.com/docs/5.3/html

Modificaciones:

-Traducción al español

-Tiempo local a hora de Chile

-Importadas las clases de los paquetes instalados

-Funcionando elixir

-Agregada la libreria Sweetalert 

-Agregada la funcion mensaje en los helpers


## TODO

-Instalar el plugin de laravel en PhpStorm

-Ejecutar composer install

-Agregar el Command Line Tool de Artisan

-Realizar npm install (con la ultima version de nodejs)

-Borrar @import "bootstrap/glyphicons"; del archivo bootstrap.scss

-Cambiar el namespace en App\Http\Mensaje y en helpers.php

## EN DESARROLLO

-Ejecutar gulp en consola para compilar los archivos, y las pruebas de phpUnit

-Ejecutar gulp watch para que el comando gulp se ejecute automáticamente cuando se modifique un archivo

-Ejecutar composer dump-autoload

-Ejecutar php artisan ide-helper:models por cada modelo para usar auto completado en el codigo

## EN PRODUCCIÓN

-Ejecutar gulp --production para que los archivos css y js se compriman