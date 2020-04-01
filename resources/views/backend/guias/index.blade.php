@extends('backend.index.layout')

@section('content')


<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Guia</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('guias.create') }}"> Criar nova guia</a>
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
        <th>Data e Hora</th>
        <th>Cod. Barras</th>
        <th>Tipo de Palete</th>
        <th>Tipo de Artigo</th>
        <th>Local de Armazenamento</th>
        <th width="265px">Ação</th>
    </tr>
    @foreach ($indexs as $index)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $index->dataHora }}</td>
            <td>{{ $index->codBarras }}</td>
            <td>{{ $index->tipoPalete }}</td>
            <td>{{ $index->tipoArtigo }}</td>
            <td>{{ $index->localArmazenamento }}</td>
            <td>
                <form action="{{ route('guias.destroy', $index->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('guias.show', $index->id) }}">Detalhes</a>

                    <a class="btn btn-primary" href="{{ route('guias.edit', $index->id) }}">Editar</a>

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
