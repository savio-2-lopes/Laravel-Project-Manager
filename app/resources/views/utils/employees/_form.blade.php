@csrf

<div class="card-body">
    <div class="row">
        <div class="col-lg-4 col-sm-6">
            {{-- Nome --}}
            <div class="mb-4">
                <label for="nome">Nome</label>
                <input type="text" value="{{ old('nome', $employees->nome ?? '') }}" placeholder="Insita o nome"
                    name="nome" class="form-control" id="nome" maxlength="100" aria-describedby="nomeHelp" />
                <small id="nomeHelp" class="form-text text-muted">Insira o nome do projeto.</small>
            </div>
            {{-- Final do Nome --}}
        </div>

        <div class="col-lg-4 col-sm-6">
            {{-- CPF --}}
            <div class="mb-4">
                <label for="cpf">CPF</label>
                <input type="text" name="cpf" value="{{ old('cpf', $employees->cpf ?? '') }}"
                    class="form-control" id="cpf" data-mask="000.000.000-00" aria-describedby="cpfHelp" />
                <small id="cpfHelp" class="form-text text-muted">Insira o cpf do funcionário.</small>
            </div>
            {{-- Final do CPF --}}
        </div>

        <div class="col-lg-4 col-sm-6">
            {{-- Data de Contratação --}}
            <div class="mb-3">
                <label for="date_contration">Data de Contratação</label>
                <div class="input-group">
                    <span class="input-group-text">
                        <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </span>
                    <input value="{{ old('data_contratacao') }}"
                        value="{{ old('data_contratacao', isset($employee->data_contratacao) ? date_to_br($employee->data_contratacao) : '') }}"
                        name="data_contratacao" aria-describedby="dateContrationHelp" class="form-control"
                        data-mask="00/00/0000" id="date_contration" type="text" placeholder="dd/mm/yyyy" required />
                </div>
                <small id="dateContrationHelp" class="form-text text-muted">
                    Insira a data de contratação do funcionário.
                </small>
            </div>
            {{-- Final da Data de Contratação --}}
        </div>

        <div class="row mb-2">
            <div class="col-md-4">
                {{-- Logradouro --}}
                <div class="form-group">
                    <label for="logradouro">Logradouro</label>
                    <input required value="{{ old('logradouro', $employee->address->logradouro ?? '') }}"
                        class="form-control" type="text" name="logradouro" id="logradouro" maxlength="255"
                        placeholder="Digite o logradouro">
                </div>
                {{-- Final do Logradouro --}}
            </div>

            <div class="col-md-4">
                {{-- Número --}}
                <div class="form-group">
                    <label for="numero">Número</label>
                    <input required value="{{ old('numero', $employee->address->numero ?? '') }}" class="form-control"
                        type="text" name="numero" id="numero" maxlength="20" placeholder="Digite o número">
                </div>
                {{-- Final do Número --}}
            </div>

            <div class="col-md-4">
                {{-- Complemento --}}
                <div class="form-group">
                    <label for="complemento">Complemento</label>
                    <input required value="{{ old('complemento', $employee->address->complemento ?? '') }}"
                        class="form-control" type="text" name="complemento" id="complemento" maxlength="50"
                        placeholder="Digite o complemento">
                </div>
                {{-- Final do Complemento --}}
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-md-3">
                {{-- Bairro --}}
                <div class="form-group">
                    <label for="bairro">Bairro</label>
                    <input required value="{{ old('bairro', $employee->address->bairro ?? '') }}" class="form-control"
                        type="text" name="bairro" id="bairro" maxlength="50" placeholder="Digite o bairro">
                </div>
                {{-- Final do Bairro --}}
            </div>

            <div class="col-md-3">
                {{-- Cidade --}}
                <div class="form-group">
                    <label for="cidade">Cidade</label>
                    <input required value="{{ old('cidade', $employee->address->cidade ?? '') }}" class="form-control"
                        type="text" name="cidade" id="cidade" maxlength="50" placeholder="Digite a cidade">
                </div>
                {{-- Final da Cidade --}}
            </div>

            <div class="col-md-3">
                {{-- CEP --}}
                <div class="form-group">
                    <label for="cep">CEP</label>
                    <input required value="{{ old('cep', $employee->address->cep ?? '') }}" class="form-control"
                        type="text" name="cep" id="cep" data-mask="00000-000"
                        placeholder="Digite o CEP">
                </div>
                {{-- Final do CEP --}}
            </div>

            <div class="col-md-3">
                {{-- Estado --}}
                <div class="form-group">
                    <label for="estado">Estado</label>
                    <input required value="{{ old('estado', $employee->address->estado ?? '') }}"
                        class="form-control" type="text" name="estado" id="estado" data-mask="SS"
                        placeholder="Digite o estado">
                </div>
                {{-- Final do Estado --}}
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center mb-4 mt-4">
        <button class="btn btn-primary btn-large col-3 text-white" type="submit">Enviar</button>
    </div>
</div>
