<?php
require 'includes/app.php';
includerTemplate('header');
?>

<main class="contenedor seccion contenido-centrado">
	<h2>Consejo para tener una alberca en tu casa sin gastar demasiado</h2>

	<picture>
		<source srcset="build/img/destacada2.webp" type="image/webp" />
		<source srcset="build/img/destacada2.jpg" type="image/jpeg" />
		<img loading="lazy" src="build/img/destacada2.jpg" alt="Imagen de la propiedad" />
	</picture>

	<p class="informacion-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>

	<div class="resumen-propiedad">
		<p>
			Lorem ipsum dolor sit amet consectetur adipisicing elit. At enim doloribus voluptates sunt error molestias nesciunt beatae nam, debitis
			deserunt consequatur ipsam dolore totam, aut consequuntur eos! Laudantium, corrupti accusantium. Lorem, ipsum dolor sit amet consectetur
			adipisicing elit. Optio ducimus ipsum exercitationem non nemo? Perspiciatis ipsam veritatis consequatur recusandae voluptates, quaerat nam
			delectus ipsum ab labore dolore accusamus eum voluptatem? Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, incidunt
			repudiandae! Ex assumenda adipisci, eos iste unde necessitatibus eum quis labore sint officiis, dolorum aliquam illum minus rem eveniet
			neque?
		</p>
	</div>
</main>

<?php includerTemplate('footer'); ?>