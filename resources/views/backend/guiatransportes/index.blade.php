@extends('backend.index.layout')

@section('content')


<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Guia de Transporte</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('guiatransportes.create') }}"> Criar novo guia de transporte</a>
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
        <th>MatriculaTransporte</th>
        <th>horaCarga</th>
        <th>horaDescarga</th>
        <th width="265px">Ação</th>
    </tr>
    @foreach ($indexs as $index)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $index->MatriculaTransporte }}</td>
            <td>{{ $index->horaCarga }}</td>
            <td>{{ $index->horaDescarga }}</td>
            <td>
                <form action="{{ route('guiatransportes.destroy', $index->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('guiatransportes.show', $index->id) }}">Detalhes</a>

                    <a class="btn btn-primary" href="{{ route('guiatransportes.edit', $index->id) }}">Editar</a>

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
