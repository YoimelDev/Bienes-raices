<main class="contenedor seccion">
    <h2>Contacto</h2>

    <?php
    if ($mensaje) { ?>
        <p class="alerta exito"> <?php echo $mensaje; ?></p>
    <?php } ?>

    <picture>
        <source srcset="build/img/destacada3.webp" type="image/webp" />
        <source srcset="build/img/destacada3.jpg" type="image/jpeg" />
        <img loading="lazy" src="build/img/destacada3.jpg" alt="Imagen Contacto" />
    </picture>

    <h2>LLene el formulario de Contacto</h2>

    <form action="/contacto" method="POST" class="formulario">
        <fieldset>
            <legend>Informacion Personal</legend>

            <label for="nombre">Nombre</label>
            <input id="nombre" type="text" placeholder="Tu Nombre" name="contacto[nombre]" required />

            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="contacto[mensaje]" required></textarea>
        </fieldset>

        <fieldset>
            <legend>Informacion sobre la propiedad</legend>

            <label for="opciones">Vende o Compra</label>
            <select id="opciones" name="contacto[tipo]" required>
                <option value="" disabled selected>-- Seleccione --</option>
                <option value="Compra">Compra</option>
                <option value="Vende">Vende</option>
            </select>

            <label for="presupuesto">Precio o Presupuesto</label>
            <input id="presupuesto" type="number" placeholder="Tu Precio o Presupuesto" name="contacto[precio]" required />
        </fieldset>

        <fieldset>
            <legend>Contacto</legend>

            <p>Como desea ser Contactado</p>

            <div class="forma-contacto">
                <label for="contactar-telefono">Telefono</label>
                <input id="contactar-telefono" type="radio" value="telefono" name="contacto[contacto]" required />

                <label for="contactar-email">E-mail</label>
                <input id="contactar-email" type="radio" value="email" name="contacto[contacto]" required />
            </div>

            <div id="contacto"></div>

        </fieldset>

        <input type="submit" value="Enviar" class="boton-verde" />
    </form>
</main>