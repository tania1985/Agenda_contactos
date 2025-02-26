<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model {
    protected $table = 'contactos';  // Nombre de la tabla en la base de datos
    protected $fillable = ['nombre', 'telefono', 'email', 'direccion'];  // Campos de la tabla
    public $timestamps = false;  // No usamos created_at y updated_at
}
