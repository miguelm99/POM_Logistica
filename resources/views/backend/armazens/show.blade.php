@extends('backend.index.layout')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Detalhes da Guia</h2>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Data e Hora:</strong>

                {{ $indexs->dataHora }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cod. Barras:</strong>
                {{ $indexs->codBarras }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tipo de Palete:</strong>
                {{ $indexs->tipoPalete }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tipo de Artigo:</strong>
                {{ $indexs->tipoArtigo }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Local de Armazenamento:</strong>
                {{ $indexs->localArmazenamento }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Entrega de Material:</strong>
                {{ $indexs->idEntregaMaterial }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tipo de Guias:</strong>
                {{ $indexs->idTipoGuias }}
            </div>
        </div>

        <br>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('guias.index') }}"> Voltar</a>
        </div>
    </div>
@endsection
