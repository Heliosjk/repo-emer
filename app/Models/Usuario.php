<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    use Notifiable;

    protected $table = 'usuarios'; // Tu tabla personalizada

    protected $primaryKey = 'id_usuario'; // Tu clave primaria personalizada

    protected $fillable = [
        'nombre',
        'apellido',
        'email',
        'password_hash',
        'rol',
    ];

    protected $hidden = [
        'password_hash',
        'remember_token',
    ];

    public function getAuthPassword()
    {
        return $this->password_hash; // Laravel usará esto como contraseña
    }
}
