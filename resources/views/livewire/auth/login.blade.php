<div class="container-fluid d-flex justify-content-center align-items-center min-vh-100 bg-light">
    <div class="row w-100">
        <div class="col-md-4 mx-auto">
            <div class="card shadow-lg border-0 rounded-3">
                <div class="card-body p-5">
                    <h3 class="text-center mb-4">
                        <i class="bi bi-person-circle text-primary"></i> Login
                    </h3>


              
                 
                    <form wire:submit.prevent="login">

                        <div class="mb-4">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" wire:model="email" required>
                            @error('email') 
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="password" class="form-label">Senha</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" wire:model="password" required>
                            @error('password') 
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-lg">Entrar</button>

                            <a  class="btn btn-primary btn-lg mt-3" href="/Cadastro/Cliente" role="button">Cadastro</a>

                        </div>
                    </form>

                  
                </div>
            </div>
        </div>
    </div>
</div>