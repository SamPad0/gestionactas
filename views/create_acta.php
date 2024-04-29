<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CRUD de Actas</title>
</head>
<body>
    <h2>Crear Acta</h2>
    <form action="index.php" method="post">
        <input type="hidden" name="action" value="create_acta">
        <label for="asunto">Asunto:</label><br>
        <input type="text" id="asunto" name="asunto"><br>
        <label for="resultado">Resultado:</label><br>
        <input type="text" id="resultado" name="resultado"><br>
        <label for="responsable">Responsable:</label><br>
        <input type="text" id="responsable" name="responsable"><br>
        <label for="fecha">Fecha:</label><br>
        <input type="date" id="fecha" name="fecha"><br>
        <label for="horario_inicio">Horario Inicio:</label><br>
        <input type="time" id="horario_inicio" name="horario_inicio"><br>
        <label for="horario_final">Horario Final:</label><br>
        <input type="time" id="horario_final" name="horario_final"><br><br>
        <input type="submit" value="Crear Acta">
    </form>
</body>
</html>
