@extends('backend.index.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar guia de transporte</h2>
            </div>

        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Warning!</strong>Preencha todos os campos do formulário<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('guiatransportes.update',$index->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Matricula de Transporte:</strong>
                    <input type="text" name="MatriculaTransporte" value="{{ $index->MatriculaTransporte }}" class="form-control" placeholder="Titulo">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Hora de Carga:</strong>
                    <input type="text" name="horaCarga" value="{{ $index->horaCarga }}" class="form-control" placeholder="Titulo">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Hora de Descarga:</strong>
                    <input type="text" name="horaDescarga" value="{{ $index->horaDescarga }}" class="form-control" placeholder="Titulo">
                </div>
            </div>


{{--            <div class="col-xs-12 col-sm-12 col-md-12 text-center">--}}
{{--                <button type="submit" class="btn btn-primary">Guardar</button>--}}
{{--            </div>--}}
            <div class="form-group text-center">
                <input type="submit" name="edit" class="btn btn-primary input-lg" value="Editar" />
            </div>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('guiatransportes.index') }}"> Voltar</a>
        </div>

    </form>
@endsection
