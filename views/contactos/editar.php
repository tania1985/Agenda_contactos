<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Contacto</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <h1>Editar Contacto</h1>

        <form action="index.php?action=editar&id=<?php echo $contacto->id; ?>" method="POST">
            <label>Nombre:</label>
            <input type="text" name="nombre" value="<?php echo htmlspecialchars($contacto->nombre); ?>" required><br>
            <label>Teléfono:</label>
            <input type="text" name="telefono" value="<?php echo htmlspecialchars($contacto->telefono); ?>"><br>
            <label>Email:</label>
            <input type="email" name="email" value="<?php echo htmlspecialchars($contacto->email); ?>" required><br>
            <label>Dirección:</label>
            <textarea name="direccion"><?php echo htmlspecialchars($contacto->direccion); ?></textarea><br>
            <button type="submit" class="btn">Guardar cambios</button>
        </form>

        <a href="index.php">Volver a la lista</a>
    </div>
</body>
</html>
