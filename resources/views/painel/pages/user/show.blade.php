@extends('layouts.template')

@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <div align="right" class="card-header">
            <a href="{{ route('user.index') }}" class="btn btn-primary"><i class="fa-solid fa-backward"></i> Voltar</a>
        </div>

        <div class="card">
            <div align="left" class="card-header">
                <h4>Detalhes do Usuário <b>{{ $user->name }}</b></h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <ul>
                            <h4><b>Dados Gerais</b></h4>
                            <hr>

                            <li>
                                <strong>Nome: </strong> {{ $user->name }}
                            </li>
                            <li>
                                <strong>E-mail: </strong> {{ $user->email }}
                            </li>
                            <li>
                                <strong>Fone: </strong> {{ $user->fone }}
                            </li>
                            <li>
                                <strong>Celular: </strong> {{ $user->celular }}
                            </li>

                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h4><b>Endereço</b></h4>
                        <hr>
                        <ul>
                            <li>
                                <strong>CEP: </strong> {{ $user->cep }}
                            </li>
                            <li>
                                <strong>Logradouro: </strong> {{ $user->logradouro }}
                            </li>
                            <li>
                                <strong>Bairro: </strong> {{ $user->bairro }}
                            </li>
                            <li>
                                <strong>Cidade: </strong> {{ $user->cidade }}
                            </li>
                            <li>
                                <strong>Estado: </strong> {{ $user->uf }}
                            </li>
                            <li>
                                <strong>Número: </strong> {{ $user->numero }}
                            </li>
                            <li>
                                <strong>Complemento: </strong> {{ $user->complemento }}
                            </li>
                        </ul>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div align="center" class="col-md-12">
                        <h5><b>Imagem</b></h5>
                        <div class="form-group">
                            @if (@$user->image)
                                <img src="{{ asset('storage/users/' . @$user->image) }}" width="180px"
                                    alt="{{ @$user->name }}">
                            @else
                                <img src="{{ asset('storage/users/semperfil.jpg') }}" width="180px">
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop