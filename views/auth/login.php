<main class="contenedor seccion contenido-centrado">
    <h2>Iniciar Sesion</h2>

    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>



    <form class="formulario" method="POST" action="/login">
        <fieldset>
            <legend>Email y Password</legend>

            <label for="email">E-mail</label>
            <input id="email" name="email" type="email" placeholder="Tu Email" />

            <label for="password">Password</label>
            <input id="password" name="password" type="password" placeholder="Tu Password" />
        </fieldset>

        <input type="submit" value="Iniciar Sesion" class="boton-verde">
    </form>
</main>