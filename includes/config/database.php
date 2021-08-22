<?php

function conectarDB(): mysqli
{
    $db = new mysqli('localhost', 'root', 'root', 'bienes_raices');

    if (!$db) {
        echo 'Error no se puedo conectar';
        exit;
    }

    return $db;
}
