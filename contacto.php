<?php include 'includes/templates/header.php' ?>

<main class="contenedor seccion">
	<h2>Contacto</h2>

	<picture>
		<source srcset="build/img/destacada3.webp" type="image/webp" />
		<source srcset="build/img/destacada3.jpg" type="image/jpeg" />
		<img loading="lazy" src="build/img/destacada3.jpg" alt="Imagen Contacto" />
	</picture>

	<h2>LLene el formulario de Contacto</h2>

	<form action="" class="formulario">
		<fieldset>
			<legend>Informacion Personal</legend>

			<label for="nombre">Nombre</label>
			<input id="nombre" type="text" placeholder="Tu Nombre" />

			<label for="email">E-mail</label>
			<input id="email" type="email" placeholder="Tu Email" />

			<label for="telefono">Telefono</label>
			<input id="telefono" type="tel" placeholder="Tu Telefono" />

			<label for="mensaje">Mensaje:</label>
			<textarea id="mensaje"></textarea>
		</fieldset>

		<fieldset>
			<legend>Informacion sobre la propiedad</legend>

			<label for="opciones">Vende o Compra</label>
			<select id="opciones">
				<option value="" disabled selected>-- Seleccione --</option>
				<option value="Compra">Compra</option>
				<option value="Vende">Vende</option>
			</select>

			<label for="presupuesto">Precio o Presupuesto</label>
			<input id="presupuesto" type="number" placeholder="Tu Precio o Presupuesto" />
		</fieldset>

		<fieldset>
			<legend>Contacto</legend>

			<p>Como desea ser Contactado</p>

			<div class="forma-contacto">
				<label for="contactar-telefono">Telefono</label>
				<input id="contactar-telefono" type="radio" name="contacto" value="telefono" />

				<label for="contactar-email">E-mail</label>
				<input id="contactar-email" type="radio" name="contacto" value="email" />
			</div>

			<p>Si eligio telefono, elija la fecha y la hora</p>

			<label for="fecha">Fecha:</label>
			<input id="fecha" type="date" />

			<label for="hora">Hora:</label>
			<input id="hora" type="time" min="09:00" max="18:00" />
		</fieldset>

		<input type="submit" value="Enviar" class="boton-verde" />
	</form>
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