@extends('layouts.template')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div align="right" class="card-header">
            <a href="{{ route('service.index') }}" class="btn btn-primary"><i class="fa-solid fa-backward"></i> Voltar</a>
        </div>

        <div class="card-body">
            <form action="{{ route('service.store') }}" class="form" method="POST">
                @include('painel.pages.services._partials.form')
            </form>
        </div>
    </div>
@stop
