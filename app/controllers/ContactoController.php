<?php
namespace App\Controllers;

use App\Models\Contacto;

class ContactoController {
    // Muestra todos los contactos
    public function index() {
        $contactos = Contacto::orderBy('nombre')->get();
        include __DIR__ . '/../../views/contactos/index.php';
    }

    // Agrega un nuevo contacto
    public function crear() {
        $errores = [];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'nombre'    => trim($_POST['nombre']),
                'telefono'  => trim($_POST['telefono']),
                'email'     => trim($_POST['email']),
                'direccion' => trim($_POST['direccion'])
            ];

            // Validaciones
            if (empty($data['nombre'])) $errores[] = "El nombre es obligatorio.";
            if (empty($data['email']) || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $errores[] = "Formato de email incorrecto.";
            }

            // Si no hay errores, guarda el contacto
            if (empty($errores)) {
                Contacto::create($data);
                header("Location: index.php");
                exit;
            }
        }

        include __DIR__ . '/../../views/contactos/crear.php';
    }

    // Edita un contacto
    public function editar($id) {
        $contacto = Contacto::find($id);
        if (!$contacto) exit("Contacto no encontrado.");

        $errores = [];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'nombre'    => trim($_POST['nombre']),
                'telefono'  => trim($_POST['telefono']),
                'email'     => trim($_POST['email']),
                'direccion' => trim($_POST['direccion'])
            ];

            // Validaciones
            if (empty($data['nombre'])) $errores[] = "El nombre es obligatorio.";
            if (empty($data['email']) || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $errores[] = "Formato de email incorrecto.";
            }

            // Si no hay errores, actualiza el contacto
            if (empty($errores)) {
                $contacto->update($data);
                header("Location: index.php");
                exit;
            }
        }

        include __DIR__ . '/../../views/contactos/editar.php';
    }

    // Elimina un contacto
    public function eliminar($id) {
        $contacto = Contacto::find($id);
        if ($contacto) $contacto->delete();
        header("Location: index.php");
        exit;
    }
}
