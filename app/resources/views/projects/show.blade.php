@extends('app')

@section('titulo', 'Detalhes do Projeto')

@section('conteudo')
    <div class="card">
        <h5 class="card-header">Detalhes do Projeto {{ $project->nome }}</h5>
        <div class="card-body">
            <p><strong>ID: </strong> {{ $project->id }}</p>
            <p><strong>Nome: </strong> {{ $project->nome }}</p>
            <p><strong>Cliente: </strong> {{ $project->client->nome }}</p>
        </div>
    </div>

    <div class="card">
        <h5 class="card-header">Funcionários que trabalham no projeto {{ $project->nome }}</h5>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Cliente</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($project->employees as $employee)
                        <tr>
                            <th scope="row">{{ $employee->id }}</th>
                            <td>
                                {{ $employee->nome }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <a class="btn btn-success" href="{{ route('clients.index') }}">Voltar para lista</a>
@endsection
