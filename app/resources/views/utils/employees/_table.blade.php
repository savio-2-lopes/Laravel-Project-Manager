<table class="table table-centered table-nowrap mb-0 rounded">
    <thead>
        <tr>
            <th class="border-0 rounded-start">ID</th>
            <th class="border-0">Nome</th>
            <th class="border-0">Data da Contratação</th>
            <th class="border-0">Situação</th>
            <th class="border-0">Ações</th>
        </tr>
    </thead>

    <tbody>
        @forelse ($employee as $employees)
            <tr>
                <th scope="row">{{ $employees->id }}</th>
                <td class="fw-bold">
                    <a href="{{ route('employees.show', $employees) }}">{{ $employees->nome }}
                    </a>
                </td>
                <td class="fw-bold">{{ $employees->data_contratacao }}</td>
                <td class="fw-bold">
                    {{ $employees->data_demissao === null ? 'Ativo' : 'Demitido' }}</td>
                <td class="fw-bold">
                    <a class="btn btn-primary" href="{{ route('employees.edit', $employees) }}">Atualizar</a>
                    <a class="btn btn-secondary" href="{{ route('employees.show', $employees) }}">Visualizar</a>
                    <form action="{{ route('employees.destroy', $employees) }}" method="POST" style="display: inline;">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger" type="submit"
                            onclick="return confirm('Tem certeza que deseja apagar?')">Apagar</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td></td>
                <td>Nenhum Funcionário cadastrado</td>
                <td></td>
                <td></td>
            </tr>
        @endforelse
    </tbody>
</table>
