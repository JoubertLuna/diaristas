@extends('layouts.template')

@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <div align="right" class="card-header">
            <a href="{{ route('service.index') }}" class="btn btn-primary"><i class="fa-solid fa-backward"></i> Voltar</a>
        </div>

        <div class="card">
            <div align="left" class="card-header">
                <h4>Detalhes do Serviço <b>{{ $service->nome }}</b></h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <ul>
                            <h4><b>Identificação</b></h4>
                            <hr>
                            <li>
                                <strong>Nome do Serviço: </strong> {{ $service->nome }}
                            </li>

                            <li>
                                <strong>Ícone: </strong> {{ $service->icone }}
                            </li>

                            <li>
                                <strong>Posição na Plataforma: </strong> {{ $service->posicao }}
                            </li>
                            <hr>
                            <h4><b>Globais</b></h4>
                            <hr>

                            <li>
                                <strong>Valor Mínimo: </strong> R$
                                {{ number_format($service->valor_minimo, 2, ',', '.') }}
                            </li>

                            <li>
                                <strong>Quantidade Mínima de Horas: </strong> {{ $service->quantidade_horas }}
                            </li>

                            <li>
                                <strong>Porcentagem de comissão: </strong> {{ $service->porcentagem }}
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h4><b>Cômodos</b></h4>
                        <hr>
                        <li>
                            <strong>Valor Por Quarto: </strong> R$
                            {{ number_format($service->valor_quarto, 2, ',', '.') }}
                        </li>

                        <li>
                            <strong>Quantidade de Horas Por Quarto: </strong> {{ $service->horas_quarto }}
                        </li>
                        <hr>
                        <li>
                            <strong>Valor Por Sala: </strong> R$ {{ number_format($service->valor_sala, 2, ',', '.') }}
                        </li>

                        <li>
                            <strong>Quantidade de Horas Por Sala: </strong> {{ $service->horas_sala }}
                        </li>
                        <hr>
                        <li>
                            <strong>Valor Por Cozinha: </strong> R$
                            {{ number_format($service->valor_cozinha, 2, ',', '.') }}
                        </li>

                        <li>
                            <strong>Quantidade de Horas Por Cozinha: </strong> {{ $service->horas_cozinha }}
                        </li>
                        <hr>
                        <li>
                            <strong>Valor Por Banheiro: </strong> R$
                            {{ number_format($service->valor_banheiro, 2, ',', '.') }}
                        </li>

                        <li>
                            <strong>Quantidade de Horas Por Banheiro: </strong> {{ $service->horas_banheiro }}
                        </li>
                        <hr>
                        <li>
                            <strong>Valor Por Quintal: </strong> R$
                            {{ number_format($service->valor_quintal, 2, ',', '.') }}
                        </li>

                        <li>
                            <strong>Quantidade de Horas Por Quintal: </strong> {{ $service->horas_quintal }}
                        </li>
                        <hr>
                        <li>
                            <strong>Valor Para Outros Serviços: </strong> R$
                            {{ number_format($service->valor_outros, 2, ',', '.') }}
                        </li>

                        <li>
                            <strong>Quantidade de Horas Para Outros Serviços: </strong> {{ $service->horas_outros }}
                        </li>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
