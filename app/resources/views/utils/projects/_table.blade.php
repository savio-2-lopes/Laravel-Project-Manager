<table class="table table-centered table-nowrap mb-0 rounded">
    <thead>
        <tr>
            <th class="border-0 rounded-start">ID</th>
            <th class="border-0">Nome</th>
            <th class="border-0">Cliente</th>
            <th class="border-0">Ações</th>
        </tr>
    </thead>

    <tbody>
        @forelse ($projects as $project)
            <tr>
                <th scope="row">{{ $project->id }}</th>
                <td class="fw-bold">
                    <a href="{{ route('projects.show', $project) }}">
                        {{ $project->nome }}
                    </a>
                </td>
                <td class="fw-bold">{{ $project->client->nome }}</td>
                <td class="fw-bold">
                    <a class="btn btn-primary" href="{{ route('projects.show', $project) }}">Atualizar</a>
                    <form action="#" method="POST" style="display: inline;">
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
                <td>Nenhum Projeto cadastrado</td>
                <td></td>
                <td></td>
            </tr>
        @endforelse
    </tbody>
</table>
