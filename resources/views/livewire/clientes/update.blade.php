<div class="mt-5">
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div style="width: 50%; margin-left: 25%; margin-bottom: 25px;" class="card">
        <h5 style="text-align: center" class="card-header">Atualizar dados</h5>

        <div class="card-body">

            <form wire:submit.prevent="salvar">
               
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text"
                        style="border-radius: 100px; border-inline-color: black; border-block-color: black"
                        class="form-control" id="email" name="email" placeholder="Ex.: luiz.batman@gmail.com"
                        wire:model.defer="email">
                </div>

                <div class="mb-3">
                    <label for="codigo_da_escola" class="form-label">Codigo da Escola</label>
                    <input type="text"
                        style="border-radius: 100px; border-inline-color: black; border-block-color: black"
                        class="form-control" id="codigo_da_escola" name="codigo_da_escola" placeholder="Ex.: 268"
                        wire:model.defer="codigo_da_escola">
                </div>

                <div class="mb-3">
                    <label for="senha" class="form-label">senha</label>
                    <input type="text"
                        style="border-radius: 100px; border-inline-color: black; border-block-color: black"
                        class="form-control" id="senha" name="senha" placeholder="Ex.: batman123"
                        wire:model.defer="password">
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Atualizar conta</button>
                </div>
            </form>
        </div>
    </div>

</div>