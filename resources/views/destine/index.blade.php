@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            Destinos <a href="{{ route('user.destine.create') }}" title="Nova Galeria" ><i class="pull-right glyphicon glyphicon-plus"></i></a>
        </div>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                <th>Endereço</th>
                <th>Bairro</th>
                <th>Cidade</th>
                <th>Complemento</th>
                <th>CEP</th>
                <th>#</th>
                </thead>
                <tbody>
                @foreach($destines as $destine)
                    <tr>
                        <td>{{ $destine->Location->address }}</td>
                        <td>{{ $destine->Location->neighborhood }}</td>
                        <td>{{ $destine->Location->city }}</td>
                        <td>{{ $destine->Location->complement }}</td>
                        <td>{{ $destine->Location->cep }}</td>
                        <td>
                            <a href="{{ route('user.destine.edit', $destine) }}" title=''><i class= 'glyphicon glyphicon-edit'></i></a>
                            <a href="{{ route('user.destine.delete', $destine) }}" title=''><i class= 'glyphicon glyphicon-trash'></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
