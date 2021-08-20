<?php
require 'includes/app.php';
includerTemplate('header');
?>

<main class="contenedor seccion">
	<h2>Conoce Sobre Nosotros</h2>

	<div class="contenido-nosotros">
		<div class="imagen">
			<picture>
				<source srcset="build/img/nosotros.webp" type="image/webp" />
				<source srcset="build/img/nosotros.jpg" type="image/jpeg" />
				<img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre Nosotros" />
			</picture>
		</div>

		<div class="texto-nosotros">
			<blockquote>25 Años de experiencia</blockquote>

			<p>
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi dolore voluptatum, quis nam, asperiores, dolor aut perspiciatis
				consequatur fugiat labore cumque sit? Laborum, aliquid fugit! At reprehenderit soluta quidem exercitationem! Lorem ipsum dolor sit amet
				consectetur adipisicing elit. Commodi dolore voluptatum, quis nam, asperiores, dolor aut perspiciatis consequatur fugiat labore cumque
				sit? Laborum, aliquid fugit! At reprehenderit soluta quidem exercitationem!
			</p>

			<p>
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus impedit modi, iusto nobis voluptatem non laudantium accusantium neque
				consequatur est sed doloremque iste eveniet, voluptas provident libero dignissimos facere dolores!
			</p>
		</div>
	</div>
</main>

<section class="contenedor seccion">
	<h2>Mas Sobre Nosotros</h2>

	<div class="iconos-nosotros">
		<div class="icono">
			<img src="build/img/icono1.svg" alt="Icono Seguridad" loading="lazy" />
			<h3>Seguridad</h3>
			<p>
				Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque similique est quisquam aut animi quas labore consectetur? Totam, sed
				molestias asperiores laudantium esse veniam nostrum culpa, qui deleniti voluptatem perspiciatis.
			</p>
		</div>

		<div class="icono">
			<img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy" />
			<h3>Precio</h3>
			<p>
				Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque similique est quisquam aut animi quas labore consectetur? Totam, sed
				molestias asperiores laudantium esse veniam nostrum culpa, qui deleniti voluptatem perspiciatis.
			</p>
		</div>

		<div class="icono">
			<img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy" />
			<h3>A Tiempo</h3>
			<p>
				Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque similique est quisquam aut animi quas labore consectetur? Totam, sed
				molestias asperiores laudantium esse veniam nostrum culpa, qui deleniti voluptatem perspiciatis.
			</p>
		</div>
	</div>
</section>

<?php includerTemplate('footer'); ?>