<?php
//clase view 
class View
{//esta es la vista base
    function __construct()
    {
    /*     echo "<p>Vista base</p>"; */
    }

    function render($nombre)//mando a llamar la vista requerida x el controlador
    {
        require 'views/' . $nombre . '.php';
    }
}

?>