<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CRUD de Usuarios</title>
</head>
<body>
    <h2>Crear Usuario</h2>
    <form action="../index.php" method="post">
        <input type="hidden" name="action" value="create_user">
        <label for="username">Usuario:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="password">Contraseña:</label><br>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Crear Usuario">
    </form>
</body>
</html>
