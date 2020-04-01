@extends('backend.index.layout')

@section('content')


<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Index</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('homeFrontend.create') }}"> Criar novo conteudo index</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<br>
<table class="table table-bordered">
    <tr>
        <th>Nº</th>
        <th>Titulo</th>
        <th>Conteudo</th>
        <th width="265px">Ação</th>
    </tr>
    @foreach ($indexs as $index)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $index->titulo }}</td>
            <td>{{ $index->conteudo }}</td>
            <td>
                <form action="{{ route('homeFrontend.destroy', $index->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('homeFrontend.show', $index->id) }}">Detalhes</a>

                    <a class="btn btn-primary" href="{{ route('homeFrontend.edit', $index->id) }}">Editar</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

{{--{!! $indexs->links() !!}--}}
    @endsection
