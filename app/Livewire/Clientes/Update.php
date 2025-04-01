<?php

namespace App\Livewire\Clientes;

use App\Models\Cliente;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Update extends Component
{


    public $clienteId, $nome, $email, $senha, $telefone, $endereco;


    public function mount($clienteId = null)
    {
        if ($clienteId) {
            $cliente = Cliente::find($clienteId);
            $this->clienteId = $cliente->id;
            $this->nome = $cliente->nome;
            $this->email = $cliente->email;
            $this->senha = '';
            $this->telefone = $cliente->telefone;
            $this->endereco = $cliente->endereco;
        }
    }

    public function update()
    {
        $this->validate();

        $cliente = Cliente::find($this->clienteId);
        $cliente->update([
            'nome' => $this->nome,
            'email' => $this->email,
            'senha' => $this->senha ? Hash::make($this->senha) : $cliente->senha,
            'telefone' => $this->telefone,
            'endereco' => $this->endereco,
        ]);

        session()->flash('message', 'Cliente atualizado com sucesso!');
    }

    public function render()
    {
        return view('livewire.clientes.update');
    }
}
