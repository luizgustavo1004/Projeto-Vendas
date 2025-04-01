
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg rounded">
                <div class="card-header bg-primary text-white text-center">
                    <h4>Cadastro de Clientes</h4>
                </div>
                <div class="card-body">
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                    
                    <form wire:submit.prevent="store">
                        <div class="form-group mb-3">
                            <label class="form-label">Nome</label>
                            <input type="text" class="form-control" wire:model="nome" placeholder="Digite o nome">
                            @error('nome') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Endereço</label>
                            <input type="text" class="form-control" wire:model="endereco" placeholder="Digite o endereço">
                            @error('endereco') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Telefone</label>
                            <input type="text" class="form-control" wire:model="telefone" placeholder="Digite o telefone">
                            @error('telefone') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">CPF</label>
                            <input type="text" class="form-control" wire:model="cpf" placeholder="Digite o CPF">
                            @error('cpf') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" wire:model="email" placeholder="Digite o email">
                            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Senha</label>
                            <input type="password" class="form-control" wire:model="password" placeholder="Digite a senha">
                            @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary w-100">Salvar</button>
                            <a  class="btn btn-primary mt-3 w-100" href="/login" role="button">Login</a>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
