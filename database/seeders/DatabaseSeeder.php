<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Criação do usuário Administrador
        User::firstOrCreate(
            ['email' => 'admin@ensinamais.com.br'],
            [
                'name' => 'Admin Padrão',
                'password' => bcrypt('Admin#0987'),
                'role' => 'admin',
            ]
        );

        // Criação do usuário Professor
        User::firstOrCreate(
            ['email' => 'professor@ensinamais.com.br'],
            [
                'name' => 'Professor Padrão',
                'password' => bcrypt('Professor#0987'),
                'role' => 'professor',
            ]
        );

        // Criação do usuário Aluno
        User::firstOrCreate(
            ['email' => 'aluno@ensinamais.com.br'],
            [
                'name' => 'Aluno Padrão',
                'password' => bcrypt('Aluno#0987'),
                'role' => 'aluno',
            ]
        );
    }
}
