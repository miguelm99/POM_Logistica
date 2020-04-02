@extends('backend.moradas.layout')
@section('content')


<div class="row">
    <div class="col-lg-12 margin-tb">

        <div class="pull-right">

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
        <th>morada</th>
        <th>distrito</th>
        <th>pais</th>
        <th>codPostal</th>
        <th width="265px">Ação</th>
    </tr>
    @foreach ($indexs as $index)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $index->morada }}</td>
            <td>{{ $index->distrito }}</td>
            <td>{{ $index->pais }}</td>
            <td>{{ $index->codPostal }}</td>
            <td>
                <form action="{{ route('moradas.destroy', $index->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('moradas.show', $index->id) }}">Detalhes</a>

                    <a class="btn btn-primary" href="{{ route('moradas.edit', $index->id) }}">Editar</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
<br>
<a class="btn btn-success" href="{{ route('moradas.create') }}"> Criar nova guia</a>

{{--{!! $indexs->links() !!}--}}
    @endsection
