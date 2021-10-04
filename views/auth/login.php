<main class="contenedor seccion contenido-centrado">
    <h2 data-cy="heading-login">Iniciar Sesion</h2>

    <?php foreach ($errores as $error) : ?>
        <div data-cy="alerta-login" class="alerta error"><?php echo $error; ?></div>
    <?php endforeach; ?>



    <form data-cy="formulario-login" class="formulario" method="POST" action="/login">
        <fieldset>
            <legend>Email y Password</legend>

            <label for="email">E-mail</label>
            <input data-cy="input-email" id="email" name="email" type="email" placeholder="Tu Email" />

            <label for="password">Password</label>
            <input data-cy="input-password" id="password" name="password" type="password" placeholder="Tu Password" />
        </fieldset>

        <input type="submit" value="Iniciar Sesion" class="boton-verde">
    </form>
</main>