<?php
/**
 * Creado en PhpStorm.
 * Usuario: Kurt Kandora
 * Fecha: 05-11-2016
 * Hora: 15:28
 */


/**
 * @param $titulo string titulo popup de mensaje
 * @param $msj string mensaje para colocar en el popup
 * @return \App\Http\Mensaje
 */
function mensaje($titulo,$msj):\App\Http\Mensaje
{
    $mensaje = app('App\Http\Mensaje');

    return $mensaje->mensaje($titulo, $msj);
}