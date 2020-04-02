@extends('backend.index.layout')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Detalhes da morada</h2>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>morada:</strong>

                {{ $indexs->morada }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>distrito:</strong>
                {{ $indexs->distrito }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pais:</strong>
                {{ $indexs->pais }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>codPostal:</strong>
                {{ $indexs->codPostal }}
            </div>
        </div>

        <br>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('guias.index') }}"> Voltar</a>
        </div>
    </div>
@endsection
