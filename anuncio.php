<?php

$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);

if (!$id) {
	header('Location: /');
}

// Base de datos
require 'includes/config/database.php';
$db = conectarDB();

// Obtener los datos de la propiedad
$consulta = "SELECT * FROM propiedades WHERE id = ${id}";
$resultado = mysqli_query($db, $consulta);

if ($resultado->num_rows === 0) {
	header('location: /');
}

$propiedad = mysqli_fetch_assoc($resultado);

require 'includes/funciones.php';
includerTemplate('header');
?>

<main class="contenedor seccion contenido-centrado">
	<h2><?php echo $propiedad['titulo']; ?></h2>


	<img loading="lazy" src="/imagenes/<?php echo $propiedad['imagen']; ?>" alt="Imagen de la propiedad" />


	<div class="resumen-propiedad">
		<p class="precio">$<?php echo $propiedad['precio']; ?></p>

		<ul class="iconos-caracteristicas">
			<li>
				<img loading="lazy" src="build/img/icono_wc.svg" alt="icono wc" />
				<p><?php echo $propiedad['wc']; ?></p>
			</li>
			<li>
				<img loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento" />
				<p><?php echo $propiedad['estacionamiento']; ?></p>
			</li>
			<li>
				<img loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones" />
				<p><?php echo $propiedad['habitaciones']; ?></p>
			</li>
		</ul>

		<p>
			<?php echo $propiedad['descripcion']; ?>
		</p>
	</div>
</main>

<?php
mysqli_close($db);

includerTemplate('footer');
?>