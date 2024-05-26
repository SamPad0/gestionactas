<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Acta</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form id="createActaForm">
        <label for="asunto">Asunto:</label>
        <input type="text" id="asunto" name="asunto" required>
        
        <label for="resultado">Resultado:</label>
        <input type="text" id="resultado" name="resultado" required>
        
        <label for="responsable">Responsable:</label>
        <input type="text" id="responsable" name="responsable" required>
        
        <label for="fecha">Fecha:</label>
        <input type="date" id="fecha" name="fecha" required>
        
        <label for="horario_inicio">Horario Inicio:</label>
        <input type="time" id="horario_inicio" name="horario_inicio" required>
        
        <label for="horario_final">Horario Final:</label>
        <input type="time" id="horario_final" name="horario_final" required>
        
        <button type="submit">Crear Acta</button>
    </form>

    <script src="script.js"></script>
</body>
</html>

