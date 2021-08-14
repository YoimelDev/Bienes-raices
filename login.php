<?php
require 'includes/funciones.php';
includerTemplate('header');
?>

<main class="contenedor seccion contenido-centrado">
    <h2>Iniciar Sesion</h2>

    <form class="formulario">
        <fieldset>
            <legend>Email y Password</legend>

            <label for="email">E-mail</label>
            <input id="email" type="email" placeholder="Tu Email" />

            <label for="password">Password</label>
            <input id="password" type="password" placeholder="Tu Password" />
        </fieldset>

        <input type="submit" value="Iniciar Sesion" class="boton-verde">
    </form>
</main>

<?php includerTemplate('footer'); ?>