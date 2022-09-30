@csrf

<div class="card-body">
    <h2 class="h5 mb-4">Informações Gerais</h2>
    <div class="row mb-4">
        <div class="col-6">
            {{-- Nome --}}
            <div class="mb-4">
                <label for="nome">Nome</label>
                <input type="text" value="{{ old('nome', $client->nome ?? '') }}" name="nome" class="form-control"
                    id="nome" placeholder="Insira o seu nome..." aria-describedby="nomeHelp" />
                <small id="nomeHelp" class="form-text text-muted">Insira o nome do cliente.</small>
            </div>
            {{-- Final Nome --}}
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-lg-4 col-sm-6">
            {{-- Endereço --}}
            <div class="my-4">
                <label for="endereco">Endereço</label>
                <textarea class="form-control" name="endereco" placeholder="Insira o endereço..." id="textarea" rows="4">{{ old('endereco', $client->endereco ?? '') }}</textarea>
            </div>
            {{-- Final do Endereço --}}
        </div>

        <div class="col-lg-4 col-sm-6">
            {{-- Observação --}}
            <div class="my-4">
                <label for="observacao">Observação</label>
                <textarea class="form-control" name="observacao" placeholder="Insira a observação..." id="textarea" rows="4">{{ old('observacao', $client->observacao ?? '') }}</textarea>
            </div>
            {{-- Final da Observação --}}
        </div>
    </div>

    <button class="btn btn-primary btn-large text-white" type="submit">
        Salvar os dados do Cliente
    </button>
</div>
