<table class="table table-centered table-nowrap mb-0 rounded">
    <thead class="thead-light">
        <tr>
            <th class="border-0 rounded-start">ID</th>
            <th class="border-0">Nome</th>
            <th class="border-0">Endereço</th>
            <th class="border-0">Ações</th>
        </tr>
    </thead>

    <tbody>
        @forelse ($clients as $client)
            <tr>
                <th scope="row">{{ $client->id }}</th>
                <td class="fw-bold">
                    <a href="{{ route('clients.show', $client) }}">{{ $client->nome }}
                    </a>
                </td>
                <td class="fw-bold">{{ $client->endereco }}</td>
                <td class="fw-bold">
                    <a class="btn btn-primary" href="{{ route('clients.edit', $client) }}">Atualizar</a>
                    <a class="btn btn-secondary" href="{{ route('clients.show', $client) }}">Exibir</a>
                    <form action="{{ route('clients.destroy', $client) }}" method="POST" style="display: inline;">
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
                <td>Nenhum Cliente cadastrado</td>
                <td></td>
                <td></td>
            </tr>
        @endforelse
    </tbody>
</table>
