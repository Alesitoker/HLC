<?php
    include('funciones.php');
    if (isset($_SESSION['intento'])) {
        // Comprobamos que existe la variable de sesion counter para iniciarla o sumarla.
        if (isset($_SESSION['counter']) && !isset($_SESSION['timeLimit'])) {
            $_SESSION['counter']++;
        } else {
            $_SESSION['counter'] = 1;
        }
        // si el contador es 6 obtendremos la hora para que no pueda volver a intentarlo hasta pasados cinco minutos
        if ($_SESSION['counter'] == 6) {
            if (!isset($_SESSION['timeLimit'])) {
                // Obtenemos la hora con cinco minutos mas,
                $_SESSION['timeLimit'] = strftime('%H:%M:%S', time()+300);
            }
            // Volvemos a log.php para crear el mensaje y mostrarlo.
            irA('log.php');
        } else {
            $counter = $_SESSION['counter'];
            echo "<h1>El usuario y/o contraseña no son correctos</h1><h2>Número de intentos $counter</h2><br/><a href='login.php'>Intentar de nuevo</a>";
        }
        // Reseteamos los intentos
        unset($_SESSION['intento']);
    } else {
        irA('error.php');
    }
?>