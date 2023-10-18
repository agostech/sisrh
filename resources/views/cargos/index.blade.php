@extends('layouts.default')
@section('title', 'Cargos')

@section('content')
    <x-btn-create>
        <x-slot name="route">{{ @route('cargos.create') }}</x-slot>
        <x-slot name="title">Cadastrar Cargo</x-slot>
    </x-btn-create>

    <h1 class="fs-2 mb-3">Lista de Cargos</h1>

    <p>Total de cargos: {{ $totalCargos }}</p>

    @if (Session::get('sucesso'))
        <div class="alert alert-success text-center">{{ Session::get('sucesso') }}</div>
    @endif

    <x-busca>
        <x-slot name="rota">{{ route('cargos.index') }}</x-slot>
        <x-slot name="tipo">Cargo</x-slot>
    </x-busca>

    <table class="table table-striped">
        <thead class="table-dark">
          <tr class="text-center">
            <th scope="col">ID</th>
            <th scope="col">Descrição</th>
            <th scope="col">Ações</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($cargos as $cargo)
                <tr class="aling-middle text-center">
                    <th scope="row">{{ $cargo->id }}</th>
                    <td>{{ $cargo->descricao }}</td>
                    <td>
                        <a href="{{ route('cargos.edit', $cargo->id) }}" title="Editar" class="btn btn-primary"><i class="bi bi-pen"></i></a>
                        <a href="" title="Deletar" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <style>
        .pagination {
            justify-content: center;
        }
    </style>
    {{ $cargos->links() }}
@endsection
