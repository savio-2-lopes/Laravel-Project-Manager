@csrf

<div class="card-body">
    <div class="row">
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

    <div class="row">
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

    <div class="d-flex justify-content-center mb-4 mt-4">
        <button class="btn btn-primary btn-large col-3 text-white" type="submit">Enviar</button>
    </div>
</div>
