<?php
    include('funciones.php');
    //Mostramos la bienvenida solo si ha iniciado sesion.
    if (isset($_SESSION['user']) && isset($_SESSION['passwd'])) {
        $user = $_SESSION['user'];
        echo "<h1>Bienvenido $user</h1><br/><a href='salir.php'>SALIR</a>";
    } else {
        irA('error.php');
    }
?>