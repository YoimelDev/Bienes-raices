<?php
// Base de datos
require '../../includes/config/database.php';
$db = conectarDB();

// Consultar para obtener los vendedores
$consulta = "SELECT * FROM vendedores";
$resultado = mysqli_query($db, $consulta);

// Array con mensajes de errores
$errores = [];

$titulo = '';
$precio = '';
$descripcion = '';
$habitaciones = '';
$wc = '';
$estacionamiento = '';
$vendedorId = '';

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

    if (!$imagen['name'] || $imagen['error']) {
        $errores[] = 'La imagen es Obligatoria';
    }

    // Validar por tamaño (100Kb Maximo)
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

        $carpetaImagenes = '../../imagenes';

        if (!is_dir($carpetaImagenes)) {
            mkdir($carpetaImagenes);
        }

        // Subir la imagen
        move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . "/archivo.jpg");
        exit;


        // Insertar en la base de datos
        $query = "INSERT INTO propiedades (titulo, precio, descripcion, habitaciones, wc, estacionamiento, creado, vendedorId) VALUES ('$titulo', '$precio', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$creado', '$vendedorId')";

        // echo $query;

        $resultado = mysqli_query($db, $query);

        if ($resultado) {
            // Redireccionar al usuario
            header('Location: /admin');
        }
    }
}


require '../../includes/funciones.php';
includerTemplate('header');
?>

<main class="contenedor seccion">
    <h1>Crear</h1>

    <a href="/admin" class="boton boton-verde">Volver</a>

    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>

    <form class="formulario" method="POST" action="/admin/propiedades/crear.php" enctype="multipart/form-data">
        <fieldset>
            <legend>Informacion General</legend>

            <label for="titulo">Titulo:</label>
            <input id="titulo" name="titulo" type="text" placeholder="Titulo Propiedad" value="<?php echo $titulo; ?>">

            <label for="precio">Precio:</label>
            <input id="precio" name="precio" type="number" placeholder="Precio Propiedad" value="<?php echo $precio; ?>">

            <label for="imagen">Imagen:</label>
            <input id="imagen" name="imagen" type="file" accept="image/jpeg, image/png">

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

        <input type="submit" value="Crear Propiedad" class="boton boton-verde">
    </form>
</main>

<?php includerTemplate('footer'); ?>