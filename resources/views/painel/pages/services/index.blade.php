@extends('layouts.template')

@section('content')
    <div class="card-header">
        <a href="{{ route('service.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Cadastrar novo
            Serviço</a>
        @include('painel.includes.alerts')
    </div>


    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <h5 class="card-header">Serviços</h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Data do Cadastro</th>
                            <th>Atualização do Cadastro</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @forelse ($services as $service)
                            <tr>
                                <td>{{ $service->id }}</td>
                                <td>{{ $service->nome }}</td>
                                <td>{{ $service->created_at }}</td>
                                <td>{{ $service->updated_at }}</td>
                                <td>
                                    <a href="{{ route('service.show', $service->id) }}" title="Detalhes do Serviço"><i
                                            class="fas fa-list text-warning"></i></a>

                                    <a href="{{ route('service.edit', $service->id) }}" title="Editar Dados"><i
                                            class="fa fa-edit text-primary"></i></a>

                                    <a href="javascript:if(confirm('Deseja realmente excluir')) {
                                    window.location.href = '{{ route('service.excluir', $service->id) }}' }"
                                        title="Excluir Dados">
                                        <i class="fa fa-trash text-danger"></i></a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td></td>
                                <td></td>
                                <td align="center"><b>Nenhum Registro foi encontrado</b></td>
                                <td></td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-center">
                {{ $services->links() }}
            </div>
        </div>
    </div>
@stop
