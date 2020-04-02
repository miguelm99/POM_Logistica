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

    <form action="{{ route('moradas.update',$index->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>morada:</strong>
                    <input type="text" name="morada" value="{{ $index->morada }}" class="form-control" placeholder="Titulo">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>distrito:</strong>
                    <input type="text" name="distrito" value="{{ $index->distrito }}" class="form-control" placeholder="Titulo">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pais:</strong>
                    <input type="text" name="pais" value="{{ $index->pais }}" class="form-control" placeholder="Titulo">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>codPostal:</strong>
                    <input type="text" name="codPostal" value="{{ $index->codPostal }}" class="form-control" placeholder="Titulo">
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
            <a class="btn btn-primary" href="{{ route('moradas.index') }}"> Voltar</a>
        </div>

    </form>
@endsection
