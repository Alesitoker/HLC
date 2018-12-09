<?php
    include('funciones.php');
    if (isset($_SESSION['user']) && isset($_SESSION['passwd'])) {
        unset($_SESSION['user']);
        unset($_SESSION['passwd']);

        session_destroy();
    }
    irA('login.php');
?>