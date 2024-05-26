<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Compromiso</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form id="createCompromisoForm">
        <label for="acta_id">ID de Acta:</label>
        <input type="text" id="acta_id" name="acta_id" required>
        
        <label for="descripcion">Descripción:</label>
        <input type="text" id="descripcion" name="descripcion" required>
        
        <label for="responsable">Responsable:</label>
        <input type="text" id="responsable" name="responsable" required>
        
        <label for="fecha_cumplimiento">Fecha de Cumplimiento:</label>
        <input type="date" id="fecha_cumplimiento" name="fecha_cumplimiento" required>
        
        <button type="submit">Crear Compromiso</button>
    </form>

    <script src="script.js"></script>
</body>
</html>
