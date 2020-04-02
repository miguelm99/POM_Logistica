@extends('backend.index.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Criar nova Guia</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('admin') }}"> Voltar</a>
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

    <form action="{{ route('moradas.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>morada:</strong>
                    <textarea class="form-control" style="height:280px" name="morada" placeholder="morada"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>distrito:</strong>
                    <textarea class="form-control" style="height:280px" name="distrito" placeholder="distrito"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pais:</strong>
                    <textarea class="form-control" style="height:280px" name="pais" placeholder="pais"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>codPostal:</strong>
                    <textarea class="form-control" style="height:280px" name="codPostal" placeholder="codPostal"></textarea>
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

