@extends('backend.index.layout')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Detalhes do Guia de transporte</h2>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>MatriculaTransporte:</strong>

                {{ $indexs->MatriculaTransporte }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>horaCarga:</strong>
                {{ $indexs->horaCarga }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>horaDescarga:</strong>
                {{ $indexs->horaDescarga }}
            </div>
        </div>


        <br>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('guiatransportes.index') }}"> Voltar</a>
        </div>
    </div>
@endsection
