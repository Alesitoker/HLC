<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <h1>Home</h2>
    <form method="post" action="proceso.php">
        <label for="user">Usuario:</label>
        <input id="user" type="text" name="user" required>
        </br>

        <label for="passwd">Contraseña:</label>
        <input id="passwd" type="password" name="passwd" required>
        </br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>