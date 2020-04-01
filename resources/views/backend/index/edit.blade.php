@extends('backend.index.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Blog</h2>
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

    <form action="{{ route('homeFrontend.update',$index->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Titulo:</strong>
                    <input type="text" name="titulo" value="{{ $index->titulo }}" class="form-control" placeholder="Titulo">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Conteudo:</strong>
                    <textarea class="form-control" style="height:150px" name="conteudo" placeholder="Conteudo">{{ $index->conteudo }}</textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 text-right">Select Profile Image</label>
                <div class="col-md-8">
                    <input type="file" name="image" />
                    <img src="{{ URL::to('/') }}/images/{{ $index->patrocinios_img }}" class="img-thumbnail" width="100" />
                    <input type="hidden" name="hidden_image" value="{{ $index->patrocinios_img }}" />
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
            <a class="btn btn-primary" href="{{ route('homeFrontend.index') }}"> Voltar</a>
        </div>

    </form>
@endsection
