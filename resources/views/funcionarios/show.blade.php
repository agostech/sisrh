@extends('layouts.default')
@section('title', 'Detalhes do Funcionário')

@section('content')
    <h1 class="fs-2 mb-3">Detalhes do Funcionário</h1>

    <style>
        .info-section {
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .title {
            font-size: 24px;
        }

        .info-pessoal {
            background-color: #e0f7fa;
            padding: 10px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .info-contract {
            background-color: #ffcc80;
            padding: 10px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .info-Beneficios {
            background-color: #c8e6c9;
            padding: 10px;
            border-radius: 10px;
            margin-bottom: 20px;
        }
    </style>

    <div>
        <p>
            @if (empty($funcionario->foto))
            <img src="/images/sombra_funcionario.jpg" alt="Foto" class="img-thumbnail" width="100">
            @else
            <img src="{{ url("storage/funcionarios/$funcionario->foto") }}" alt="Foto" class="img-thumbnail" width="100">
            @endif
        </p>

        <div class="title">
            <p><strong>Informações Pessoais</strong></p>
        </div>
        <div class="info-pessoal">
            <p><strong>Nome:</strong> {{ $funcionario->nome }}</p>
            <p><strong>Data de Nascimento:</strong> {{ Carbon\Carbon::createFromFormat('Y-m-d', $funcionario->data_nasc)->format('d/m/Y') }}</p>
            <p><strong>Sexo:</strong> {{ $funcionario->sexo }}</p>
            <p><strong>E-mail:</strong> {{ $funcionario->email}}</p>
            <p><strong>Telefone:</strong> {{ $funcionario->telefone }}</p>
            <p><strong>CPF:</strong> {{ $funcionario->cpf }}</p>
        </div>

        <di class="title">
            <p><strong>Informações Contratuais</strong></p>
        </di>
        <div class="info-contract">
            <p><strong>Salário:</strong> R$ {{ $funcionario->salario }}</p>
            <p><strong>Departamento:</strong> {{ $funcionario->departamento->nome }}</p>
            <p><strong>Cargo:</strong> {{ $funcionario->cargo->descricao }}</p>
            <p><strong>Cadastro:</strong> {{ $funcionario->status }}</p>
        </div>


        <div class="title">
            <p><strong>Lista de Benefícios</strong></p>
        </div>
        <div class="info-Beneficios">
            @foreach ($funcionario->beneficios as $beneficio)
                <p><strong>{{ $beneficio->descricao }}</strong></p>
            @endforeach
        </div>
    </div>

    <a href="{{ route('funcionarios.index') }}" class="btn btn-primary">Voltar</a>
@endsection
