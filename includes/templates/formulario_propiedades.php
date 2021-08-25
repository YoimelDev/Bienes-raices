<fieldset>
    <legend>Informacion General</legend>

    <label for="titulo">Titulo:</label>
    <input id="titulo" name="titulo" type="text" placeholder="Titulo Propiedad" value="<?php echo s($propiedad->titulo); ?>">

    <label for="precio">Precio:</label>
    <input id="precio" name="precio" type="number" placeholder="Precio Propiedad" value="<?php echo s($propiedad->precio); ?>">

    <label for="imagen">Imagen:</label>
    <input id="imagen" name="imagen" type="file" accept="image/jpeg, image/png">

    <?php if ($propiedad->imagen) : ?>
        <img src="/imagenes/<?php echo $propiedad->imagen; ?>" alt="Imagen Propiedad" class="imagen-small">
    <?php endif; ?>

    <label for="descripcion">Descripcion</label>
    <textarea id="descripcion" name="descripcion"><?php echo s($propiedad->descripcion); ?></textarea>
</fieldset>

<fieldset>
    <legend>Informacion Propiedad</legend>

    <label for="habitaciones">Habitaciones:</label>
    <input id="habitaciones" name="habitaciones" type="number" placeholder="Ej: 3" min="1" max="9" value="<?php echo s($propiedad->habitaciones); ?>">

    <label for="wc">Baños:</label>
    <input id="wc" name="wc" type="number" placeholder="Ej: 3" min="1" max="9" value="<?php echo s($propiedad->wc); ?>">

    <label for="estacionamiento">Estacionamiento:</label>
    <input id="estacionamiento" name="estacionamiento" type="number" placeholder="Ej: 3" min="1" max="9" value="<?php echo s($propiedad->estacionamiento); ?>">
</fieldset>

<fieldset>
    <legend>Vendedor</legend>

</fieldset>