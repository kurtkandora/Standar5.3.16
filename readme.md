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

-Comandos artisan key:generate  artisan app:name php artisan optimize

-Configurar Directorios todos azules y node_modules rojo

-Borrar @import "bootstrap/glyphicons"; del archivo bootstrap.scss

-Configurar la ip del la ejecución de la aplicacion a 127.0.0.[numero cualquiera]

- Modificar el archivo C:\Windows\System32\drivers\etc\hosts y agregar (127.0.0.[numero elegido para la ejecución] [dominio aplicación].app)

-Modificar SESSION_DOMAIN a [dominio aplicación].app

-Instalar PHPUnit en una carpeta personal, agregar una configuración para [Run] donde ocupe PHPUnit utilizado phpunit.xml en [Defined in the configuration file]

## EN DESARROLLO

-Ejecutar gulp en consola para compilar los archivos, y las pruebas de phpUnit

-Ejecutar gulp watch para que el comando gulp se ejecute automáticamente cuando se modifique un archivo

-Ejecutar composer dump-autoload

-Ejecutar php artisan ide-helper:models por cada modelo para usar auto completado en el codigo

## EN PRODUCCIÓN

-Ejecutar gulp --production para que los archivos css y js se compriman