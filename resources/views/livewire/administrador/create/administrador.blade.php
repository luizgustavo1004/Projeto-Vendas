<div class="container mt-5">
    <div class="card shadow-lg p-4">
        <h2 class="text-center mb-4">Cadastro de Administrador</h2>
        
        @if (session()->has('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        
        <form wire:submit.prevent="store">
            <div class="form-group mb-3">
                <label class="form-label">Nome</label>
                <input type="text" class="form-control" wire:model="nome" placeholder="Digite o nome">
                @error('nome') <span class="text-danger">{{ $message }}</span> @enderror
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

            <button type="submit" class="btn btn-primary w-100">Cadastrar</button>
        </form>
    </div>
</div>