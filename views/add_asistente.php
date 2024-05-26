<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Asistente</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form id="createAsistenteForm">
        <label for="acta_id">ID de Acta:</label>
        <input type="text" id="acta_id" name="acta_id" required>
        
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <button type="submit">Agregar Asistente</button>
    </form>

    <script src="script.js"></script>
</body>
</html>
