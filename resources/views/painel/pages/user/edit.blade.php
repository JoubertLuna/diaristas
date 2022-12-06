@extends('layouts.template')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div align="right" class="card-header">
            <a href="{{ route('user.index') }}" class="btn btn-primary"><i class="fa-solid fa-backward"></i> Voltar</a>
        </div>

        <div class="card-body">
            <form action="{{ route('user.update', $user->id) }}" method="POST" class="form" enctype="multipart/form-data">
                @method('PUT')
                @include('painel.pages.user._partials.form')
            </form>
        </div>
    </div>
@stop
