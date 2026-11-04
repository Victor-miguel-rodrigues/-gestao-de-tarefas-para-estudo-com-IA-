<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UsuariosFactory> */
    use HasFactory;

    protected $table = 'usuarios';

    protected $fillable = ['nome_completo','email','password','data_nascimento'];
}
