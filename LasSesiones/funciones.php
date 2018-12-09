<?php
    session_start();
    // Conprobar si el tiempo limite a terminado.
    function endTimeLimit() {
        $time = strftime('%H:%M:%S', time());
        if (isset($_SESSION['timeLimit'])) {
            return strcmp($time, $_SESSION['timeLimit']) >= 0 ? true : false;
        } else {
            return false;
        }
    }
    // Finalizar un intento.
    function endTry() {
            unset($_SESSION['timeLimit']);
            unset($_SESSION['counter']);
            unset($_SESSION['message']);
    }
    
    function irA($pagina) {
        header("Location: $pagina");
    }
?>