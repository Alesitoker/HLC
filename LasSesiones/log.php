<?php
    include('funciones.php');
    // usuario valido
    $user = 'pollo';
    // contraseña valida
    $passwd = 'aguacate';

    if ((isset($_POST['user']) && isset($_POST['passwd'])) || isset($_SESSION['timeLimit'])) {
        // si el tiempo limite ha terminado anulamos las sesiones relacionada con los intentos.
        if (endTimeLimit()) {
            endTry();
        }
        // Si hemos realizado los 5 intentos formamos el mensaje de intento y volvemos al login donde de mostrara el mensaje.
        if (isset($_SESSION['timeLimit'])) {
            echo $_SESSION['message'] = sprintf("<p>Puedes volver a intentarlo a las %s</p>", $_SESSION['timeLimit']);
            irA('login.php');
        } else {
            $u = $_POST['user'];
            $p = $_POST['passwd'];
            // Comprobamos que el usuario y contraseña sean validos.
            if ($u == $user && $p == $passwd) {
                // Creamos las sesiones para usuario y contraseña con los datos.
                $_SESSION['user'] = $u;
                $_SESSION['passwd'] = $p;
                // reseteamos los intentos.
                endTry();
                irA('welcome.php');
            } else {
                // En el caso que los datos sean invalidos se enviara a la pagina intento.php.
                $_SESSION['intento'] = true;
                irA('intento.php');
            }
        }
    } else {
        irA('error.php');
    }
?>