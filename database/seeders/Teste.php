<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class Teste extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::Create([
            'name' => 'Professor',
            'email' => 'Professor@teste.com',
            'password' => Hash::make('123456'),
            'role'=>'funcionario'
        ]);

        User::Create([
            'name' => 'Cliente',
            'email' => 'Cliente@teste.com',
            'password' => Hash::make('123456'),
            'role'=>'user'
        ]);

        User::Create([
            'name' => 'Admin',
            'email' => 'Admin@teste.com',
            'password' => Hash::make('123456'),
            'role'=>'admin'
        ]);
    }
}
