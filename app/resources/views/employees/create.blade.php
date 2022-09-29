@extends('layouts.app')
@section('titulo', 'Novo Funcionário')
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
                <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Novo Funcionário</li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4">Novo Funcionário</h1>
                <p class="mb-0">
                    Registrando um novo funcionário.
                </p>
            </div>
            <div>
                <a href="{{ route('employees.index') }}" class="btn btn-outline-gray">
                    <i class="ph-caret-circle-left-fill"></i> Voltar</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 mb-4">
            <div class="card border-0 shadow components-section">
                <form action="{{ route('employees.store') }}" method="POST">
                    @include('employees.partials._form')
                    <div class="d-flex justify-content-center mb-4">
                        <button class="btn btn-primary btn-large col-3 text-white" type="submit">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
