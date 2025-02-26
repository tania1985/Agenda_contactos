<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config/database.php';

use App\Controllers\ContactoController;

$action = $_GET['action'] ?? 'index';
$controller = new ContactoController();

switch ($action) {
    case 'crear':
        $controller->crear();
        break;
    case 'editar':
        if (isset($_GET['id'])) $controller->editar($_GET['id']);
        else echo "ID requerido.";
        break;
    case 'eliminar':
        if (isset($_GET['id'])) $controller->eliminar($_GET['id']);
        else echo "ID requerido.";
        break;
    default:
        $controller->index();
}
