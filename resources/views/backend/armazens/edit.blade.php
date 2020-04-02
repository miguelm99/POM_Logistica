@extends('backend.index.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar a Guia</h2>
            </div>

        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Warning!</strong> Please check input field code<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('guias.update',$index->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>dataHora:</strong>
                    <input type="text" name="dataHora" value="{{ $index->dataHora }}" class="form-control" placeholder="Titulo">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>codBarras:</strong>
                    <input type="text" name="codBarras" value="{{ $index->codBarras }}" class="form-control" placeholder="Titulo">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>tipoPalete:</strong>
                    <input type="text" name="tipoPalete" value="{{ $index->tipoPalete }}" class="form-control" placeholder="Titulo">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>tipoArtigo:</strong>
                    <input type="text" name="tipoArtigo" value="{{ $index->tipoArtigo }}" class="form-control" placeholder="Titulo">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>localArmazenamento:</strong>
                    <input type="text" name="localArmazenamento" value="{{ $index->localArmazenamento }}" class="form-control" placeholder="Titulo">
                </div>
            </div>


{{--            <div class="col-xs-12 col-sm-12 col-md-12 text-center">--}}
{{--                <button type="submit" class="btn btn-primary">Guardar</button>--}}
{{--            </div>--}}
            <div class="form-group text-center">
                <input type="submit" name="edit" class="btn btn-primary input-lg" value="Edit" />
            </div>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('guias.index') }}"> Voltar</a>
        </div>

    </form>
@endsection
