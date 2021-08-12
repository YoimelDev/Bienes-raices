<?php

// Importar la conexion
require '../includes/config/database.php';
$db = conectarDB();

// Escribir el query
$query = "SELECT * FROM propiedades";

// Consultar l BD
$consulta = mysqli_query($db, $query);

// Muestra mensaje condicional
$resultado = $_GET['resultado'] ?? null;

// Incluye un template
require '../includes/funciones.php';
includerTemplate('header');
?>

<main class="contenedor seccion">
    <h1>Administrador de Bienes Raices</h1>
    <?php if ($resultado == 1) : ?>
        <p class="alerta exito">Anuncio creado correctamente</p>
    <?php endif; ?>

    <a href="/admin/propiedades/crear.php" class="boton boton-verde">Nueva Propiedad</a>

    <table class="propiedades">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titulo</th>
                <th>Imagen</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            <!-- Mostrar los resultados -->
            <?php while ($propiedad = mysqli_fetch_assoc($consulta)) : ?>
                <tr>
                    <td> <?php echo $propiedad['id']; ?> </td>
                    <td> <?php echo $propiedad['titulo']; ?> </td>
                    <td> <img src="/src/img/<?php echo $propiedad['imagen']; ?> " class="imagen-tabla"></td>
                    <td>$ <?php echo $propiedad['precio']; ?> </td>
                    <td>
                        <a href="#" class="boton-rojo-block">Eliminar</a>
                        <a href="#" class="boton-amarillo-block">Actualizar</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</main>

<?php
// Cerrar la conexion
mysqli_close($db);

includerTemplate('footer');
?>