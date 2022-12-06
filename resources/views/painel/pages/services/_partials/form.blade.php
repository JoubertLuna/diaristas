@include('painel.includes.alerts')
@csrf
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="row">
                <div class="col-md-4">
                    <div class="card-body">
                        <label>Novo serviço:</label>
                        <input type="text" name="nome" id="nome" class="form-control" placeholder="Novo serviço"
                            value="{{ $service->nome ?? old('nome') }}" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-body">
                        <label>Ícone:</label>
                        <select class="form-control form-select" name="icone" id="icone" style="width: 100%;">
                            <option value="">Selecione o ícone</option>
                            <option value="twf-cleaning-1"
                                {{ old('icone', $service->icone ?? '') === 'twf-cleaning-1' ? 'selected' : '' }}>
                                Ícone 1</option>
                            <option value="twf-cleaning-2"
                                {{ old('icone', $service->icone ?? '') === 'twf-cleaning-2' ? 'selected' : '' }}>
                                Ícone 2</option>
                            <option value="twf-cleaning-3"
                                {{ old('icone', $service->icone ?? '') === 'twf-cleaning-3' ? 'selected' : '' }}>
                                Ícone 3</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-body">
                        <label>Posição na Plataforma:</label>
                        <input type="text" name="posicao" data-mask="00" id="posicao" class="form-control"
                            placeholder="Posição na Plataforma" value="{{ $service->posicao ?? old('posicao') }}"
                            required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card-body">
                        <label>Valor Mínimo:</label>
                        <input type="text" name="valor_minimo" data-mask="#.##0,00" data-mask-reverse="true"
                            id="valor_minimo" class="form-control" placeholder="Valor Mínimo"
                            value="{{ $service->valor_minimo ?? old('valor_minimo') }}" required>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card-body">
                        <label>Quantidade Mínima de Horas:</label>
                        <input type="text" name="quantidade_horas" id="quantidade_horas" data-mask="0"
                            class="form-control" placeholder="Quantidade Mínima de Horas"
                            value="{{ $service->quantidade_horas ?? old('quantidade_horas') }}" required>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card-body">
                        <label>Porcentagem de comissão:</label>
                        <input type="text" name="porcentagem" id="porcentagem" data-mask="00" class="form-control"
                            placeholder="Porcentagem de comissão"
                            value="{{ $service->porcentagem ?? old('porcentagem') }}" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card-body">
                        <label>Valor Por Quarto:</label>
                        <input type="text" name="valor_quarto" id="valor_quarto" data-mask="#.##0,00"
                            data-mask-reverse="true" class="form-control" placeholder="Valor Por Quarto"
                            value="{{ $service->valor_quarto ?? old('valor_quarto') }}" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <label>Quantidade de Horas Por Quarto:</label>
                        <input type="text" name="horas_quarto" id="horas_quarto" data-mask="0" class="form-control"
                            placeholder="Quantidade de Horas Por Quarto"
                            value="{{ $service->horas_quarto ?? old('horas_quarto') }}" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card-body">
                        <label>Valor Por Sala:</label>
                        <input type="text" name="valor_sala" data-mask="#.##0,00" data-mask-reverse="true"
                            id="valor_sala" class="form-control" placeholder="Valor Por Sala"
                            value="{{ $service->valor_sala ?? old('valor_sala') }}" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <label>Quantidade de Horas Por Sala:</label>
                        <input type="text" name="horas_sala" id="horas_sala" data-mask="0" class="form-control"
                            placeholder="Quantidade de Horas Por Sala"
                            value="{{ $service->horas_sala ?? old('horas_sala') }}" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="card-body">
                        <label>Valor Por Cozinha:</label>
                        <input type="text" name="valor_cozinha" id="valor_cozinha" data-mask="#.##0,00"
                            data-mask-reverse="true" class="form-control" placeholder="Valor Por Cozinha"
                            value="{{ $service->valor_cozinha ?? old('valor_cozinha') }}" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <label>Quantidade de Horas Por Cozinha:</label>
                        <input type="text" name="horas_cozinha" id="horas_cozinha" data-mask="0"
                            class="form-control" placeholder="Quantidade de Horas Por Cozinha"
                            value="{{ $service->horas_cozinha ?? old('horas_cozinha') }}" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="card-body">
                        <label>Valor Por Banheiro:</label>
                        <input type="text" name="valor_banheiro" id="valor_banheiro" data-mask="#.##0,00"
                            data-mask-reverse="true" class="form-control" placeholder="Valor Por Banheiro"
                            value="{{ $service->valor_banheiro ?? old('valor_banheiro') }}" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <label>Quantidade de Horas Por Banheiro:</label>
                        <input type="text" name="horas_banheiro" id="horas_banheiro" data-mask="0"
                            class="form-control" placeholder="Quantidade de Horas Por Banheiro"
                            value="{{ $service->horas_banheiro ?? old('horas_banheiro') }}" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="card-body">
                        <label>Valor Por Quintal:</label>
                        <input type="text" name="valor_quintal" id="valor_quintal" data-mask="#.##0,00"
                            data-mask-reverse="true" class="form-control" placeholder="Valor Por Quintal"
                            value="{{ $service->valor_quintal ?? old('valor_quintal') }}" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <label>Quantidade de Horas Por Quintal:</label>
                        <input type="text" name="horas_quintal" id="horas_quintal" data-mask="0"
                            class="form-control" placeholder="Quantidade de Horas Por Quintal"
                            value="{{ $service->horas_quintal ?? old('horas_quintal') }}" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card-body">
                        <label>Valor Para Outros Serviços:</label>
                        <input type="text" name="valor_outros" id="valor_outros" data-mask="#.##0,00"
                            data-mask-reverse="true" class="form-control" placeholder="Valor Para Outros Serviços"
                            value="{{ $service->valor_outros ?? old('valor_outros') }}" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <label>Quantidade de Horas Para Outros Serviços:</label>
                        <input type="text" name="horas_outros" id="horas_outros" data-mask="0"
                            class="form-control" placeholder="Quantidade de Horas Para Outros Serviços"
                            value="{{ $service->horas_outros ?? old('horas_outros') }}" required>
                    </div>
                </div>
            </div>

            <div class="card-header">
                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Cadastrar
                    Serviço</button>
            </div>
        </div>
    </div>
</div>
