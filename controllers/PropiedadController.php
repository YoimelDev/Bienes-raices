<?php

namespace Controllers;

use MVC\Router;
use Model\Propiedad;
use Model\Vendedor;

class PropiedadController
{
    public static function index(Router $router)
    {
        $propiedades = Propiedad::all();
        $resultado = null;

        $router->render('propiedades/admin', [
            'propiedades' => $propiedades,
            'resultado' => $resultado
        ]);
    }

    public static function crear(Router $router)
    {
        $propiedades = new Propiedad;
        $vendedores = Vendedor::all();

        $router->render('propiedades/crear', [
            'propiedad' => $propiedades,
            'vendedores' => $vendedores
        ]);
    }

    public static function actualizar()
    {
        echo "Actualizar Propiedad";
    }
}
