@extends('backend.index.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Criar novo guia de transporte</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('guiatransportes.index') }}"> Voltar</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Warning!</strong> Please check your input code<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('guiatransportes.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>MatriculaTransporte:</strong>
                    <input type="text" name="MatriculaTransporte" class="form-control">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>horaCarga:</strong>
                    <input type="text" name="horaCarga" class="form-control">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>horaDescarga:</strong>
                    <input type="text" name="horaDescarga" class="form-control">
                </div>
            </div>




{{--            <div class="col-xs-12 col-sm-12 col-md-12 text-center">--}}
{{--                <button type="submit" class="btn btn-primary">Submit</button>--}}
{{--            </div>--}}


            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <input type="submit" name="add" class="btn btn-primary input-lg" value="Adicionar" />
            </div>
        </div>

    </form>
@endsection

