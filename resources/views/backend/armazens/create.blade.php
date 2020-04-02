@extends('backend.index.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Criar nova Guia</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('armazens.index') }}"> Voltar</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Warning!</strong> Preencha todos os campos do formulário<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('armazens.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>morada:</strong>
                    <input type="text" name="morada" class="form-control">
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tipo de Palete:</strong>
                    <textarea class="form-control" style="height:280px" name="tipoPalete" placeholder="tipoPalete"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tipo de Artigo:</strong>
                    <textarea class="form-control" style="height:280px" name="tipoArtigo" placeholder="tipoArtigo"></textarea>
                </div>
            </div>

{{--            <div class="col-xs-12 col-sm-12 col-md-12">--}}
{{--                <div class="form-group">--}}
{{--                    <strong>idEntregaMaterial:</strong>--}}
{{--                    <textarea class="form-control" style="height:280px" name="idEntregaMaterial" placeholder="idEntregaMaterial"></textarea>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-xs-12 col-sm-12 col-md-12">--}}
{{--                <div class="form-group">--}}
{{--                    <strong>idTipoGuias:</strong>--}}
{{--                    <textarea class="form-control" style="height:280px" name="idTipoGuias" placeholder="idTipoGuias"></textarea>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-xs-12 col-sm-12 col-md-12 text-center">--}}
{{--                <button type="submit" class="btn btn-primary">Submit</button>--}}
{{--            </div>--}}


            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <input type="submit" name="add" class="btn btn-primary input-lg" value="Adicionar" />
            </div>
        </div>

    </form>
@endsection

