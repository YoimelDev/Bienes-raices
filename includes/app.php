<?php

require 'funciones.php';
require 'config/database.php';
require __DIR__ . '/../vendor/autoload.php';

use App\Propiedad;

$proiedad = new Propiedad;

var_dump($proiedad);
