<?php

require 'includes/config/database.php';
$db = conectarDB();

$errores = [];

// Autenticar el usuario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = mysqli_real_escape_string($db, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (!$email) {
        $errores[] = "El email es obligatorio o no es valido";
    }
    if (!$password) {
        $errores[] = "El Password es obligatorio";
    }
    if (empty($errores)) {
        // Revisar si el usuario existe
        $query = "SELECT * FROM usuarios WHERE email = '${email}' ";
        $resultado = mysqli_query($db, $query);


        if ($resultado->num_rows) {
            // Revisar si el password es correcto
            $usuario = mysqli_fetch_assoc($resultado);

            // Verificar si el password es correcto o no
            $auth = password_verify($password, $usuario['password']);

            if ($auth) {
                // El usuario esta autenticado
                session_start();

                // LLenar el array de la sesion
                $_SESSION['usuario'] = $usuario['email'];
                $_SESSION['login'] = true;

                header('location: /admin');
            } else {
                $errores[] = "Password es incorrecto";
            }
        } else {
            $errores[] = "El usuario no existe";
        }
    }
}



require 'includes/funciones.php';
includerTemplate('header');
?>

<main class="contenedor seccion contenido-centrado">
    <h2>Iniciar Sesion</h2>

    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>



    <form class="formulario" method="POST">
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

<?php includerTemplate('footer'); ?>