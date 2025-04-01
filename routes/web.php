<?php

use App\Livewire\Administrador\Create\Administrador;
use App\Livewire\Administrador\Create\Cliente;
use App\Livewire\Administrador\Create\Funcionario;
use App\Livewire\Auth\Login;
use App\Livewire\Clientes\Cadastro;
use App\Livewire\Clientes\Update;
use Illuminate\Support\Facades\Route;


Route::get('/Cadastro/Cliente', Cadastro::class);

Route::get('/login', Login::class)->name('login');

Route::get('/Cadastro/Administrador', Administrador::class)->middleware(['auth', 'role:admin'])->name('administrador.dashboard');

Route::get('/Administrador/Cadastro/Funcionarios', Funcionario::class)->middleware(['auth', 'role:admin']);

Route::get('/administrador/clientes/cadastro', Cliente::class)->middleware(['auth', 'role:admin']);

Route::get('/cliente', Update::class)->name('cliente.dashboard');