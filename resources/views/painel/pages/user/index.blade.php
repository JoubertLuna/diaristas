@extends('layouts.template')

@section('content')
    <div class="card-header">
        <a href="{{ route('user.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Cadastrar novo
            Usuário</a>
        @include('painel.includes.alerts')
    </div>


    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <h5 class="card-header">Usuários</h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Data de Cadastro</th>
                            <th>Atualização de Cadastro</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @forelse ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->created_at }}</td>
                                <td>{{ $user->updated_at }}</td>
                                <td>
                                    <a href="{{ route('user.show', $user->id) }}" title="Detalhes do Usuário"><i
                                            class="fas fa-list text-warning"></i></a>

                                    <a href="{{ route('user.edit', $user->id) }}" title="Editar Dados"><i
                                            class="fa fa-edit text-primary"></i></a>

                                    <a href="javascript:if(confirm('Deseja realmente excluir')) {
                                    window.location.href = '{{ route('user.excluir', $user->id) }}' }"
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
                {{ $users->links() }}
            </div>
        </div>
    </div>
@stop
