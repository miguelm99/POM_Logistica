@extends('backend.index.layout')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Detalhes da Página inicial</h2>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Titulo:</strong>

                {{ $indexs->titulo }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Conteudo:</strong>
                {{ $indexs->conteudo }}
            </div>
        </div>
        <br>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('homeFrontend.index') }}"> Voltar</a>
        </div>
    </div>
@endsection
