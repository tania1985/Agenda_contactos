<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Contactos</title>
    <link rel="stylesheet" href="public/css/styles.css">
</head>
<body>
    <div class="container">
        <h1>Lista de Contactos</h1>
        <a href="index.php?action=crear" class="btn">Nuevo Contacto</a>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Teléfono</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($contactos as $contacto): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($contacto->nombre); ?></td>
                        <td><?php echo htmlspecialchars($contacto->email); ?></td>
                        <td><?php echo htmlspecialchars($contacto->telefono); ?></td>
                        <td>
                            <a href="index.php?action=editar&id=<?php echo $contacto->id; ?>" class="btn">Editar</a>
                            <a href="index.php?action=eliminar&id=<?php echo $contacto->id; ?>" class="btn btn-danger" onclick="return confirm('¿Eliminar contacto?');">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
