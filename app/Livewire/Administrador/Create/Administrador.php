<?php

namespace App\Livewire\Administrador\Create;

use App\Models\Administrador as ModelsAdministrador;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Administrador extends Component
{
    public $password;
    public $nome;
    public $cpf;
    public $email;
  

    public function rules()
    {
        return [
            'nome' => 'required|string|min:3|max:100',
            'cpf' => 'required|string|min:11|max:14|unique:administradors,cpf',
            'email' => 'required|email|max:255|unique:administradors,email',
       
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O nome é obrigatório.',
            'cpf.required' => 'O CPF é obrigatório.',
            'cpf.unique' => 'Este CPF já está cadastrado.',
            'email.required' => 'O e-mail é obrigatório.',
            'email.unique' => 'Este e-mail já está cadastrado.',
     
        ];
    }

    public function store()
    {
        $this->validate();

        $user = User::create([
            'name' => $this->nome,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'role' => 'admin'
        ]);
    
        ModelsAdministrador::create([
            'nome' => $this->nome,
            'cpf' => $this->cpf,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'user_id' => $user->id, 
        ]);
    
        session()->flash('message', 'Administrador cadastrado com sucesso!');
    }

     


    public function render()
    {
        return view('livewire.administrador.create.administrador');
    }




}
