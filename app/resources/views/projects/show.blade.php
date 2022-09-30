@extends('layouts.app')
@section('titulo', 'Detalhes do Projeto')
@section('conteudo')
    <div class="py-4">
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                <li class="breadcrumb-item">
                    <a href="#">
                        <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                            </path>
                        </svg>
                    </a>
                </li>
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('projects.index') }}">Projeto</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $project->nome }}</li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-4 mt-4 mb-lg-0">
                <h1 class="h4">
                    <a href="{{ route('projects.index') }}">
                        <i class="ph-arrow-left-fill" style="font-size: 20px"></i>
                    </a> Detalhe do Projeto {{ $project->nome }}
                </h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mb-4">
            <div class="card border-0 shadow components-section">
                <div class="card-body">
                    <p><strong>ID: </strong> {{ $project->id }}</p>
                    <p><strong>Nome: </strong> {{ $project->nome }}</p>
                    <p><strong>Cliente: </strong> {{ $project->client->nome }}</p>
                </div>
            </div>
        </div>
        <div class="col-12 mb-4">
            <div class="card border-0 shadow components-section">
                <h5 class="card-header">Funcionários que trabalham no projeto {{ $project->nome }}</h5>
                <div class="card-body">
                    <table class="table table-centered table-nowrap mb-0 rounded">
                        <thead>
                            <tr>
                                <th class="border-0 rounded-start">ID</th>
                                <th class="border-0">Nome</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($project->employees as $employee)
                                <tr>
                                    <th scope="row">{{ $employee->id }}</th>
                                    <td class="fw-bold">
                                        <a href="{{ route('employees.show', $employee) }}">{{ $employee->nome }}
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td></td>
                                    <td>Nenhum Funcionário neste projeto</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
