<?php include 'includes/templates/header.php' ?>

<main class="contenedor seccion contenido-centrado">
	<h2>Casa en Venta frente al bosque</h2>

	<picture>
		<source srcset="build/img/destacada.webp" type="image/webp" />
		<source srcset="build/img/destacada.jpg" type="image/jpeg" />
		<img loading="lazy" src="build/img/destacada.jpg" alt="Imagen de la propiedad" />
	</picture>

	<div class="resumen-propiedad">
		<p class="precio">$3.000.000</p>

		<ul class="iconos-caracteristicas">
			<li>
				<img loading="lazy" src="build/img/icono_wc.svg" alt="icono wc" />
				<p>3</p>
			</li>
			<li>
				<img loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento" />
				<p>3</p>
			</li>
			<li>
				<img loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones" />
				<p>4</p>
			</li>
		</ul>

		<p>
			Lorem ipsum dolor sit amet consectetur adipisicing elit. At enim doloribus voluptates sunt error molestias nesciunt beatae nam, debitis
			deserunt consequatur ipsam dolore totam, aut consequuntur eos! Laudantium, corrupti accusantium. Lorem, ipsum dolor sit amet consectetur
			adipisicing elit. Optio ducimus ipsum exercitationem non nemo? Perspiciatis ipsam veritatis consequatur recusandae voluptates, quaerat nam
			delectus ipsum ab labore dolore accusamus eum voluptatem?
		</p>
	</div>
</main>

<footer class="footer seccion">
	<div class="contenedor contenedor-footer">
		<nav class="navegacion">
			<a href="nosotros.php">Nosotros</a>
			<a href="anuncios.php">Anuncios</a>
			<a href="blog.php">Blog</a>
			<a href="contacto.php">Contacto</a>
		</nav>
	</div>

	<p class="copyright">Todos los Derechos Reservados 2021 &copy;</p>
</footer>

<script src="./build/js/bundle.min.js"></script>
</body>

</html>