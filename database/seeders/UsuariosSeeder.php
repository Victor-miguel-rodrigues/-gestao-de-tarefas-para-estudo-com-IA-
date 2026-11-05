<?php

namespace Database\Seeders;

use App\Models\Usuarios;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Usuarios::create([
            'nome_completo' => 'maliski',
            'email' => 'maliske@gmail.com',
            'password' => bcrypt('123456789'),
            'data_nascimento' => '2000-08-07'
        ]);
    }
}
