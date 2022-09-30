@csrf
<div class="card-body">
    <h2 class="h5 mb-4">Informações Gerais</h2>
    <div class="row mb-4">
        <div class="col-lg-4 col-sm-6">
            {{-- Nome --}}
            <div class="mb-4">
                <label for="nome">Nome</label>
                <input type="text" value="{{ old('nome', $project->nome ?? '') }}"
                    maxlength="100"placeholder="Insita o nome" name="nome" class="form-control" id="nome"
                    aria-describedby="nomeHelp" />
                <small id="nomeHelp" class="form-text text-muted">Insira o nome do projeto.</small>
            </div>
            {{-- Final do Nome --}}
        </div>

        <div class="col-lg-4 col-sm-6">
            {{-- Orçamento --}}
            <div class="mb-4">
                <label for="orcamento">Orçamento</label>
                <input type="text" name="orcamento" value="{{ old('orcamento', $project->orcamento ?? '') }}"
                    class="form-control" id="orcamento"
                    aria-describedby="orcamentoHelp" />
                <small id="orcamentoHelp" class="form-text text-muted">Insira o orcamento do projeto.</small>
            </div>
            {{-- Final do Orçamento --}}
        </div>
    </div>

    <h2 class="h5 mb-4">Alocação de Recursos</h2>
    <div class="row">
        <div class="col-lg-4 col-sm-6">
            {{-- Clientes --}}
            <div class="mb-4">
                <label for="clientes">Clientes</label>
                <select class="form-control" id="select2" required="required"
                    name="client_id"aria-describedby="clientesHelp">
                    <option>Selecione o cliente</option>
                    @foreach ($clientes as $cliente)
                        <option {{ ($project->client_id ?? '') === $cliente->id ? 'selected' : '' }}
                            value="{{ $cliente->id }}">
                            {{ $cliente->nome }}
                        </option>
                    @endforeach
                </select>
                <small id="clientesHelp" class="form-text text-muted">Insira o orcamento do funcionário.</small>
            </div>
            {{-- Final dos Clientes --}}
        </div>

        <div class="col-lg-4 col-ms-6">
            {{-- Funcionários --}}
            <div class="mb-4">
                <label for="funcionarios">Funcionários Alocados</label>
                <select class="form-control" name="funcionarios[]" multiple id="funcionarios">
                    @foreach ($funcionarios as $funcionario)
                        <option
                            {{ in_array($funcionario->id, isset($project) ? $project->employees->pluck('id')->toArray() : []) ? 'selected' : '' }}
                            value="{{ $funcionario->id }}">
                            {{ $funcionario->nome }}
                        </option>
                    @endforeach
                </select>
            </div>
            {{-- Final de Funcionários --}}
        </div>
    </div>

    <h2 class="h5 mb-4">Datas de Funcionamento</h2>
    <div class="row mb-5">
        <div class="col-md-4">
            <label for="data_inicio">Data Início</label>
            <div class="input-group">
                <span class="input-group-text">
                    <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                            clip-rule="evenodd"></path>
                    </svg>
                </span>
                <input data-datepicker=""
                    value="{{ old('data_inicio', isset($project->data_inicio) ? date_to_br($project->data_inicio) : '') }}"
                    name="data_inicio" aria-describedby="dateStartHelp" class="form-control"
                    placeholder="Digite a data de início" data-mask="00/00/0000" id="date_contration" type="text"
                    placeholder="dd/mm/yyyy" required />
            </div>
            <small id="dateStartHelp" class="form-text text-muted">
                Insira a data de iníco.
            </small>
        </div>

        <div class="col-md-4">
            <label for="data_final">Data Final</label>
            <div class="input-group">
                <span class="input-group-text">
                    <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                            clip-rule="evenodd"></path>
                    </svg>
                </span>
                <input data-datepicker=""
                    value="{{ old('data_final', isset($project->data_final) ? date_to_br($project->data_final) : '') }}"
                    name="data_final" aria-describedby="dateEndHelp" class="form-control"
                    placeholder="Digite a data de Final" data-mask="00/00/0000" id="data_final" type="text"
                    placeholder="dd/mm/yyyy" required />
            </div>
            <small id="dateEndHelp" class="form-text text-muted">
                Insira a data final.
            </small>
        </div>
    </div>

    <button class="btn btn-primary btn-large text-white" type="submit">
        Salvar os dados do Projeto
    </button>
</div>
