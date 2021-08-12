<?php

$inicio = true;
include 'includes/templates/header.php'
?>

<main class="contenedor seccion">
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
</main>

<section class="seccion contenedor">
	<h2>Casas y Depas en Venta</h2>

	<div class="contenedor-anuncios">
		<div class="anuncio">
			<picture>
				<source srcset="build/img/anuncio1.webp" type="image/webp" />
				<source srcset="build/img/anuncio1.jpg" type="image/jpeg" />
				<img loading="lazy" src="build/img/anuncio1.jpg" alt="anuncio" />
			</picture>

			<div class="contenido-anuncio">
				<h3>Casa de Lujo en el Lago</h3>
				<p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio</p>
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

				<a class="boton-amarillo-block" href="anuncio.php">Ver Propiedad</a>
			</div>
			<!-- Contenido-anuncio-->
		</div>
		<!--anuncio-->

		<div class="anuncio">
			<picture>
				<source srcset="build/img/anuncio2.webp" type="image/webp" />
				<source srcset="build/img/anuncio2.jpg" type="image/jpeg" />
				<img loading="lazy" src="build/img/anuncio2.jpg" alt="anuncio" />
			</picture>

			<div class="contenido-anuncio">
				<h3>Casa terminados de lujos</h3>
				<p>Casa con diseño moderno, asi como tecnologia inteligente y amueblada</p>
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

				<a class="boton-amarillo-block" href="anuncio.php">Ver Propiedad</a>
			</div>
			<!-- Contenido-anuncio-->
		</div>
		<!--anuncio-->

		<div class="anuncio">
			<picture>
				<source srcset="build/img/anuncio3.webp" type="image/webp" />
				<source srcset="build/img/anuncio3.jpg" type="image/jpeg" />
				<img loading="lazy" src="build/img/anuncio3.jpg" alt="anuncio" />
			</picture>

			<div class="contenido-anuncio">
				<h3>Casa con alberca</h3>
				<p>Casa con alberca y acabados de lujos en la ciudad, excelente oportunidad</p>
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

				<a class="boton-amarillo-block" href="anuncio.php">Ver Propiedad</a>
			</div>
			<!-- Contenido-anuncio-->
		</div>
		<!--anuncio-->
	</div>
	<!--contenedor-anuncio-->

	<div class="aling-right">
		<a class="boton-verde" href="anuncios.php">Ver Todas</a>
	</div>
</section>

<section class="imagen-contacto">
	<h2>Encuentra la casa de tus sueños</h2>
	<p>LLena el formulario de contacto y un asesor se pondra en contacto contigo a la brevedad</p>
	<a class="boton-amarillo" href="contacto.php">Contactanos</a>
</section>

<div class="contenedor seccion seccion-inferior">
	<section class="blog">
		<h3>Nuestro Blog</h3>

		<article class="entrada-blog">
			<div class="imagen">
				<picture>
					<source srcset="build/img/blog1.webp" type="image/webp" />
					<source srcset="build/img/blog1.jpg" type="image/jpeg" />
					<img loading="lazy" src="build/img/blog1.jpg" alt="Texto entrada blog" />
				</picture>
			</div>

			<div class="texto-entrada">
				<a href="entrada.php">
					<h4>Terraza en el techo de tu casa</h4>
				</a>

				<p class="informacion-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>

				<p>Consejos para construir una terraza en el techo de tu casa, con los mejores materiales y ahorrando dinero</p>
			</div>
		</article>

		<article class="entrada-blog">
			<div class="imagen">
				<picture>
					<source srcset="build/img/blog2.webp" type="image/webp" />
					<source srcset="build/img/blog2.jpg" type="image/jpeg" />
					<img loading="lazy" src="build/img/blog2.jpg" alt="Texto entrada blog" />
				</picture>
			</div>

			<div class="texto-entrada">
				<a href="entrada.php">
					<h4>Guia para la decoracion de tu hogar</h4>
				</a>

				<p class="informacion-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>

				<p>Maxima el espacio en tu hogar con esta guia, aprende a combinar muebles y colores para darle vida a tu espacio</p>
			</div>
		</article>
	</section>

	<section class="testimoniales">
		<h3>testimoniales</h3>

		<div class="testimonial">
			<blockquote>
				El personal se comporto de una excelente forma, muy buena atencion y la casa que me ofrecieron cumple con todas mis expectativas.
			</blockquote>
			<p>- Yoimel Rojas</p>
		</div>
	</section>
</div>

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