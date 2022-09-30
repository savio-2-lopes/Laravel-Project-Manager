@extends('layouts.app')
@section('titulo', 'Detalhes do Funcionário')
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
                <li class="breadcrumb-item"><a href="{{ route('employees.index') }}">Funcionário</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $employee->nome }}</li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-4 mt-4 mb-lg-0 w-100">
                <div class="d-flex align-items-center justify-content-between">
                    <h1 class="h4">
                        <a href="{{ route('employees.index') }}">
                            <i class="ph-arrow-left-fill" style="font-size: 20px"></i>
                        </a> Detalhe do Funcionário {{ $employee->nome }}
                    </h1>
                    @if (!$employee->data_demissao)
                        <a href="{{ route('employees.inactive', $employee) }}" class="btn btn-danger">
                            Inativar Funcionário
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mb-4">
            <div class="card border-0 shadow components-section">
                <div class="card-body">
                    <p><strong>ID: </strong> {{ $employee->id }}</p>
                    <p><strong>nome: </strong> {{ $employee->nome }}</p>
                    <p><strong>CPF: </strong> {{ formata_cpf($employee->cpf) }}</p>
                    <p><strong>Data de Contratação: </strong> {{ date_to_br($employee->data_contratacao) }}</p>
                    <p>
                        <strong>Situação: </strong> {{ situacao_funcionario($employee->data_demissao) }}

                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mb-4">
            <div class="card border-0 shadow components-section">
                <h5 class="card-header">Endereço do Funcionário {{ $employee->nome }}</h5>
                <div class="card-body">
                    <p><strong>Logradouro: </strong> {{ $employee->address->logradouro }}</p>
                    <p><strong>Número: </strong> {{ $employee->address->numero }}</p>
                    <p><strong>Complemento: </strong> {{ $employee->address->complemento }}</p>
                    <p><strong>Bairro: </strong> {{ $employee->address->bairro }}</p>
                    <p><strong>Cidade: </strong> {{ $employee->address->cidade }}</p>
                    <p><strong>Estado: </strong> {{ $employee->address->estado }}</p>
                    <p><strong>CEP: </strong> {{ formata_cep($employee->address->cep) }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
