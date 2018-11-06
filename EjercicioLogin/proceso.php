<?php
    $user = $_POST['user'];
    $password = $_POST['passwd'];
    if($user == 'usuario' && $password == 'usuario') {
        header('Location: mipagina.php');
    } else {
        header('Location: error.php');
    }
?>