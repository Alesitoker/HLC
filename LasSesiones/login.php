<?php 
    include('funciones.php');
    // Si ha iniciado secion no podra acceder al login.
    if (isset($_SESSION['user']) && isset($_SESSION['passwd'])) {
        irA('welcome.php');
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sesion</title>
</head>
<body>
    <h2>Introduce tus Datos</h2>
    <form action="log.php" method="POST">
        <label for="user">Login:</label>
        <input type="text" id="user" name="user"/>
        <br/>
        <label for="passwd">Password:</label>
        <input type="password" id="passwd" name="passwd"/>
        <br/>
        <input type="submit" value="Ingresar">
    </form>
    <?php
        // se mostrara el mensaje de cuando podra volver a intentarlo.
        if(isset($_SESSION['message'])) {
            echo $_SESSION['message'];
        } 
    ?>
</body>
</html>