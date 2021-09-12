<?php

namespace Controllers;

use MVC\Router;
use Model\Propiedad;
use Model\Vendedor;
use Intervention\Image\ImageManagerStatic as Image;

class PropiedadController
{
    public static function index(Router $router)
    {
        $propiedades = Propiedad::all();
        // Muestra mensaje condicional
        $resultado = $_GET['resultado'] ?? null;

        $router->render('propiedades/admin', [
            'propiedades' => $propiedades,
            'resultado' => $resultado
        ]);
    }

    public static function crear(Router $router)
    {
        $propiedades = new Propiedad;
        $vendedores = Vendedor::all();

        // Array con mensajes de errores
        $errores = Propiedad::getErrores();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Crea una nueva instancia
            $propiedad = new Propiedad($_POST['propiedad']);

            // Generar un nombre unico
            $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";

            // Setear la imagen
            // Realiza un resize a la imagen con intervention
            if ($_FILES['propiedad']['tmp_name']['imagen']) {
                $image = Image::make($_FILES['propiedad']['tmp_name']['imagen'])->fit(800, 600);
                $propiedad->setImagen($nombreImagen);
            }

            // Validar
            $errores = $propiedad->validar();

            // Revisar que el array de errores este vacio
            if (empty($errores)) {
                // Crear carpeta
                if (!is_dir(CARPETA_IMAGENES)) {
                    mkdir(CARPETA_IMAGENES);
                }

                // Guarda la imagen en el servidor
                $image->save(CARPETA_IMAGENES . $nombreImagen);

                // Guarda en la base de datos
                $propiedad->guardar();
            }
        }

        $router->render('propiedades/crear', [
            'propiedad' => $propiedades,
            'vendedores' => $vendedores,
            'errores' => $errores
        ]);
    }

    public static function actualizar()
    {
        echo "Actualizar Propiedad";
    }
}
