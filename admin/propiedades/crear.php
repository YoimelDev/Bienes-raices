<?php
require '../../includes/funciones.php';
includerTemplate('header');
?>

<main class="contenedor seccion">
    <h1>Crear</h1>

    <a href="/admin" class="boton boton-verde">Volver</a>

    <form class="formulario">
        <fieldset>
            <legend>Informacion General</legend>

            <label for="titulo">Titulo:</label>
            <input id="titulo" type="text" placeholder="Titulo Propiedad">

            <label for="precio">Precio:</label>
            <input id="precio" type="number" placeholder="Precio Propiedad">

            <label for="imagen">Imagen:</label>
            <input id="imagen" type="file" accept="image/jpeg, image/png">

            <label for="descripcion">Descripcion</label>
            <textarea id="descripcion"></textarea>
        </fieldset>

        <fieldset>
            <legend>Informacion Propiedad</legend>

            <label for="habitaciones">Habitaciones:</label>
            <input id="habitaciones" type="number" placeholder="Ej: 3" min="1" max="9">

            <label for="wc">Baños:</label>
            <input id="wc" type="number" placeholder="Ej: 3" min="1" max="9">

            <label for="estacionamiento">Estacionamiento:</label>
            <input id="estacionamiento" type="number" placeholder="Ej: 3" min="1" max="9">
        </fieldset>

        <fieldset>
            <legend>Vendedor</legend>

            <select>
                <option value="1">Juan</option>
                <option value="2">Karen</option>
            </select>
        </fieldset>

        <input type="submit" value="Crear Propiedad" class="boton boton-verde">
    </form>
</main>

<?php includerTemplate('footer'); ?>