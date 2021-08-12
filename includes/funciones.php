<?php

require 'app.php';

function includerTemplate($nombre, $inicio = false)
{
    include TEMPLATES_URL . "/${nombre}.php";
}
