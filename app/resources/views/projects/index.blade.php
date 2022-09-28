@extends('app')

@section('titulo', 'Lista de Projetos')

@section('conteudo')
    <h1>Lista de Projetos</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th class="col">Nome</th>
                <th scope="col">Cliente</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <th scope="row">{{ $project->id }}</th>
                    <td><a href="{{ route('projects.show', $project) }}">{{ $project->nome }}</a></td>
                    <td>{{ $project->client->nome }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- <a class="btn btn-success" href="{{ route('projects.create') }}">Novo projecte</a> --}}
@endsection
