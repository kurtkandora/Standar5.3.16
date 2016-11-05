<?php
/**
 * Creado en PhpStorm.
 * Usuario: Kurt Kandora
 * Fecha: 05-11-2016
 * Hora: 15:43
 */

namespace App\Http;


class Mensaje
{

    public function mensaje($titulo, $mensaje):Mensaje
    {
        session()->flash('mensaje_titulo', $titulo);
        session()->flash('mensaje_texto', $mensaje);

        return $this->info();
    }

    public function advertencia():Mensaje
    {
        session()->flash('mensaje_tipo', 'warning');

        return $this;
    }

    public function error():Mensaje
    {
        session()->flash('mensaje_tipo', 'error');

        return $this;
    }

    public function exito():Mensaje
    {
        session()->flash('mensaje_tipo', 'success');

        return $this;
    }

    public function info():Mensaje
    {
        session()->flash('mensaje_tipo', 'info');

        return $this;
    }

    public function input():Mensaje
    {
        session()->flash('mensaje_tipo', 'input');

        return $this;
    }

    public function confirmar($msj):Mensaje
    {
        session()->flash('mensaje_confirmar', $msj);

        return $this;
    }
}

