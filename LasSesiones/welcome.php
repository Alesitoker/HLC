<?php
    session_start();
    if (isset($_SESSION['user']) && isset($_SESSION['passwd'])) {
        $user = $_SESSION['user'];
        echo "<h2>Bienvenido $user</h2><br/><a href='login.html'>SALIR</a>";
    }
?>