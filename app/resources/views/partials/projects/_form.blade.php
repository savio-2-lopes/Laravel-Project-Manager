@csrf

<div class="card-body">
    <div class="row">
        <div class="col-lg-4 col-sm-6">
            <!-- Name -->
            <div class="mb-4">
                <label for="nome">Nome</label>
                <input type="text" value="{{ old('nome') }}" name="nome" class="form-control" id="nome"
                    aria-describedby="nomeHelp" />
                <small id="nomeHelp" class="form-text text-muted">Insira o nome do funcionário.</small>
            </div>
            <!-- End of Name -->
        </div>

        <div class="col-lg-4 col-sm-6">
            <!-- CPF -->
            <div class="mb-4">
                <label for="cpf">CPF</label>
                <input type="text" name="cpf" value="{{ old('cpf') }}" class="form-control" id="cpf"
                    aria-describedby="cpfHelp" />
                <small id="cpfHelp" class="form-text text-muted">Insira o cpf do funcionário.</small>
            </div>
            <!-- End of CPF -->
        </div>

        <div class="col-lg-4 col-sm-6">
            <!-- Data de Contratação -->
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
                    <input data-datepicker="" value="{{ old('data_contratacao') }}" name="data_contratacao"
                        aria-describedby="dateContrationHelp" class="form-control" id="date_contration" type="text"
                        placeholder="dd/mm/yyyy" required />
                </div>
                <small id="dateContrationHelp" class="form-text text-muted">Insira a data de contratação do
                    funcionário.</small>
            </div>
            <!-- End of Data de Contratação -->
        </div>
    </div>
</div>
