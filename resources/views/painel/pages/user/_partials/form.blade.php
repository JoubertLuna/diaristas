@include('painel.includes.alerts')
@csrf
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="row">
                <div class="col-md-6">
                    <div class="card-body">
                        <label>Nome do Usuário:</label>
                        <input type="text" name="name" id="name" class="form-control"
                            placeholder="Nome do Usuário" value="{{ $user->name ?? old('name') }}" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <label>E-mail do Usuário:</label>
                        <input type="email" name="email" id="email" class="form-control"
                            placeholder="E-mail do Usuário" value="{{ $user->email ?? old('email') }}" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card-body">
                        <label>Senha do Usuário:</label>
                        <input type="password" name="password" id="password" class="form-control"
                            placeholder="Senha do Usuário" value="{{ old('password', '') }}" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card-body">
                        <label>Confirmar Senha do Usuário:</label>
                        <input type="password" name="password_confirmation" id="password_confirmation"
                            class="form-control" placeholder="Confirmar Senha do Usuário"
                            value="{{ old('password_confirmation', '') }}" required>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-4">
                    <div class="card-body">
                        <label>Fone:</label>
                        <input type="text" name="fone" id="fone" class="form-control mascara-fone"
                            placeholder="(00) 0000-0000" value="{{ $user->fone ?? old('fone') }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-body">
                        <label>Celular:</label>
                        <input type="text" name="celular" id="celular" class="form-control mascara-celular"
                            placeholder="(00) 00000-0000" value="{{ $user->celular ?? old('celular') }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-body">
                        <label>CEP:</label>
                        <input type="text" name="cep" id="cep" class="form-control mascara-cep busca_cep"
                            placeholder="00.000-000" value="{{ $user->cep ?? old('cep') }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="card-body">
                        <label>Logradouro:</label>
                        <input type="text" name="logradouro" id="logradouro" class="form-control rua"
                            placeholder="Digite o Logradouro" value="{{ $user->logradouro ?? old('logradouro') }}">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="card-body">
                        <label>Bairro:</label>
                        <input type="text" name="bairro" id="bairro" class="form-control bairro"
                            placeholder="Digite o Bairro" value="{{ $user->bairro ?? old('bairro') }}">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card-body">
                        <label>Número:</label>
                        <input type="text" name="numero" id="numero" class="form-control" placeholder="Ex:244"
                            value="{{ $user->numero ?? old('numero') }}">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="card-body">
                        <label>Cidade:</label>
                        <input type="text" name="cidade" id="cidade" class="form-control cidade"
                            placeholder="Digite a Cidade" value="{{ $user->cidade ?? old('cidade') }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-body">
                        <label>Estado:</label>
                        <input type="text" name="uf" id="uf" class="form-control estado"
                            placeholder="EX: PB" value="{{ $user->uf ?? old('uf') }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-body">
                        <label>Complemento:</label>
                        <input type="text" name="complemento" id="complemento" class="form-control complemento"
                            placeholder="Digite o Complemento"
                            value="{{ $user->complemento ?? old('complemento') }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <div class="card-body">
                        <span class="btn btn-info">
                            <span>
                                <input type="file" name="image" id="image" class="form-control-file"
                                    onchange="pegaArquivo(this.files)" value="{{ $user->image ?? old('image') }}">
                            </span>
                        </span>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="card-body">
                        @if (@$user->image)
                            <img src="{{ asset('storage/users/' . @$user->image) }}" width="180px"
                                alt="{{ @$user->name }}" id="imgup">
                        @else
                            <img src="{{ asset('storage/users/semperfil.jpg') }}" width="180px" id="imgup">
                        @endif
                    </div>
                </div>
            </div>

            <div class="card-header">
                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Cadastrar Usuário</button>
            </div>
        </div>
    </div>
</div>

@section('js')
    <script>
        function pegaArquivo(files) {
            var file = files[0];
            const fileReader = new FileReader();
            fileReader.onloadend = function() {
                $("#imgup").attr("src", fileReader.result);
            }
            fileReader.readAsDataURL(file);
        }
    </script>
@stop
