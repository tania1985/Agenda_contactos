<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Contacto</title>
    <link rel="stylesheet" href="public/css/styles.css">
</head>
<body>
    <div class="container">
        <h1>Agregar Nuevo Contacto</h1>

        <form action="index.php?action=crear" method="POST">
            <label>Nombre:</label>
            <input type="text" name="nombre" required><br>
            <label>Teléfono:</label>
            <input type="text" name="telefono"><br>
            <label>Email:</label>
            <input type="email" name="email" required><br>
            <label>Dirección:</label>
            <textarea name="direccion"></textarea><br>
            <button type="submit" class="btn">Guardar</button>
        </form>

        <a href="index.php">Volver a la lista</a>
    </div>
</body>
</html>
