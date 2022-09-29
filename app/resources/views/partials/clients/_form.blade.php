@csrf

<div class="card-body">
    <div class="row">
        <div class="col-6">
            <!-- Name -->
            <div class="mb-4">
                <label for="nome">Nome</label>
                <input type="text" value="{{ $clients->nome ?? old('nome') }}" name="nome" class="form-control"
                    id="nome" aria-describedby="nomeHelp" />
                <small id="nomeHelp" class="form-text text-muted">Insira o nome do funcionário.</small>
            </div>
            <!-- End of Name -->
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4 col-sm-6">
            <!-- Endereço -->
            <div class="my-4">
                <label for="endereco">Endereço</label>
                <textarea class="form-control" name="endereco" placeholder="Insira o endereço..." id="textarea" rows="4">{{ $clients->endereco ?? old('endereco') }}</textarea>
            </div>
            <!-- End of Endereço -->
        </div>

        <div class="col-lg-4 col-sm-6">
            <!-- Data de Contratação -->
            <div class="my-4">
                <label for="observacao">Observação</label>
                <textarea class="form-control" name="observacao" placeholder="Insira a observação..." id="textarea" rows="4">{{ $clients->observacao ?? old('observacao') }}</textarea>
            </div>
            <!-- End of Data de Contratação -->
        </div>
    </div>
</div>
