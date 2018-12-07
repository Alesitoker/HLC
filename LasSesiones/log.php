<?php
    session_start();
    if (isset($_POST['user']) && isset($_POST['passwd'])) {
        $_SESSION['user'] = $_POST['user'];
        $_SESSION['passwd'] = $_POST['passwd'];
        
        if (!empty($_POST['user']) && !empty($_POST['passwd'])) {
            header('Location: welcome.php');
        } else {

        }
    }
?>