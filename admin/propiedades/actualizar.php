<?php
require '../../includes/funciones.php';
estaAutenticado();

// Validar la URL por id valido
$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);

if (!$id) {
    header('Location: /admin');
}

// Base de datos
require '../../includes/config/database.php';
$db = conectarDB();

// Obtener los datos de la propiedad
$consulta = "SELECT * FROM propiedades WHERE id = ${id}";
$resultado = mysqli_query($db, $consulta);
$propiedad = mysqli_fetch_assoc($resultado);

// echo "<pre>";
// var_dump($propiedad);
// echo "</pre>";


// Consultar para obtener los vendedores
$consulta = "SELECT * FROM vendedores";
$resultado = mysqli_query($db, $consulta);

// Array con mensajes de errores
$errores = [];

$titulo = $propiedad['titulo'];
$precio = $propiedad['precio'];
$descripcion = $propiedad['descripcion'];
$habitaciones = $propiedad['habitaciones'];
$wc = $propiedad['wc'];
$estacionamiento = $propiedad['estacionamiento'];
$vendedorId = $propiedad['vendedorId'];
$imagenPropiedad = $propiedad['imagen'];

// Ejecutar el codigo despues de que el usuario envia el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // echo "<pre>";
    // var_dump($_POST);
    // echo "</pre>";

    // echo "<pre>";
    // var_dump($_FILES);
    // echo "</pre>";

    $titulo = mysqli_real_escape_string($db, $_POST['titulo']);
    $precio = mysqli_real_escape_string($db, $_POST['precio']);
    $descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);
    $habitaciones = mysqli_real_escape_string($db, $_POST['habitaciones']);
    $wc = mysqli_real_escape_string($db, $_POST['wc']);
    $estacionamiento = mysqli_real_escape_string($db, $_POST['estacionamiento']);
    $vendedorId = mysqli_real_escape_string($db, $_POST['vendedor']);
    $creado = date('Y/m/d');
    $imagen = $_FILES['imagen'];

    if (!$titulo) {
        $errores[] = 'Debes añadir un titulo';
    }

    if (!$precio) {
        $errores[] = 'El precio es Obligatorio';
    }

    if (strlen($descripcion) < 50) {
        $errores[] = 'La descripcion es obligatoria y debe tener al menos 50 caracteres';
    }

    if (!$habitaciones) {
        $errores[] = 'El numero de habitaciones es obligatorio';
    }

    if (!$wc) {
        $errores[] = 'El numero de baños es obligatorio';
    }

    if (!$estacionamiento) {
        $errores[] = 'El numero de lugares de estacionamientos es obligatorio';
    }

    if (!$vendedorId) {
        $errores[] = 'Elige un vendedor';
    }

    // Validar por tamaño (5mb Maximo)
    $medida = 1000 * 5000;

    if ($imagen['size'] > $medida) {
        $errores[] = 'La imagen es muy pesada';
    }

    // echo "<pre>";
    // var_dump($errores);
    // echo "</pre>"; 

    // Revisar que el array de errores este vacio
    if (empty($errores)) {
        // Subida de Archivos
        // Crear carpeta
        $carpetaImagenes = '../../imagenes/';

        if (!is_dir($carpetaImagenes)) {
            mkdir($carpetaImagenes);
        }

        $nombreImagen = '';

        if ($imagen['name']) {
            // Eliminar la imagen previa
            unlink($carpetaImagenes . $propiedad['imagen']);

            // Generar un nombre unico
            $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";

            // Subir la imagen
            move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImagen);
        } else {
            $nombreImagen = $propiedad['imagen'];
        }



        // Insertar en la base de datos
        $query = "UPDATE propiedades SET titulo = '${titulo}', precio = '${precio}', imagen = '${nombreImagen}', descripcion = '${descripcion}', habitaciones = ${habitaciones}, wc = ${wc}, estacionamiento = ${estacionamiento},  vendedorId = ${vendedorId} WHERE id = ${id}";

        // echo $query;

        $resultado = mysqli_query($db, $query);

        if ($resultado) {
            // Redireccionar al usuario
            header('Location: /admin?resultado=2');
        }
    }
}



includerTemplate('header');
?>

<main class="contenedor seccion">
    <h1>Actualizar Propiedad</h1>

    <a href="/admin" class="boton boton-verde">Volver</a>

    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>

    <form class="formulario" method="POST" enctype="multipart/form-data">
        <fieldset>
            <legend>Informacion General</legend>

            <label for="titulo">Titulo:</label>
            <input id="titulo" name="titulo" type="text" placeholder="Titulo Propiedad" value="<?php echo $titulo; ?>">

            <label for="precio">Precio:</label>
            <input id="precio" name="precio" type="number" placeholder="Precio Propiedad" value="<?php echo $precio; ?>">

            <label for="imagen">Imagen:</label>
            <input id="imagen" name="imagen" type="file" accept="image/jpeg, image/png">

            <img src="/imagenes/<?php echo $imagenPropiedad; ?>" class="imagen-small">

            <label for="descripcion">Descripcion</label>
            <textarea id="descripcion" name="descripcion"><?php echo $descripcion; ?></textarea>
        </fieldset>

        <fieldset>
            <legend>Informacion Propiedad</legend>

            <label for="habitaciones">Habitaciones:</label>
            <input id="habitaciones" name="habitaciones" type="number" placeholder="Ej: 3" min="1" max="9" value="<?php echo $habitaciones; ?>">

            <label for="wc">Baños:</label>
            <input id="wc" name="wc" type="number" placeholder="Ej: 3" min="1" max="9" value="<?php echo $wc; ?>">

            <label for="estacionamiento">Estacionamiento:</label>
            <input id="estacionamiento" name="estacionamiento" type="number" placeholder="Ej: 3" min="1" max="9" value="<?php echo $estacionamiento; ?>">
        </fieldset>

        <fieldset>
            <legend>Vendedor</legend>

            <select name="vendedor">
                <option value="">--Seleccione--</option>
                <?php while ($vendedor = mysqli_fetch_assoc($resultado)) : ?>
                    <option <?php echo $vendedorId === $vendedor['id'] ? 'selected' : ''; ?> value="<?php echo $vendedor['id']; ?>"><?php echo $vendedor['nombre'] . " " . $vendedor['apellido']; ?></option>
                <?php endwhile; ?>
            </select>
        </fieldset>

        <input type="submit" value="Actualizar Propiedad" class="boton boton-verde">
    </form>
</main>

<?php includerTemplate('footer'); ?>