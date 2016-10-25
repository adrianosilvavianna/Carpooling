@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
                    <div class="panel-heading">
                       Destinos <a href="/destine/create" title="Nova Galeria" ><i class="pull-right glyphicon glyphicon-plus"></i></a>
                    </div>
                    <div class="panel-body">
                        <table class="table table-hover">
                            <thead>
                            <th>Endereço</th>
                            <th>CEP</th>
                            <th>Bairro</th>
                            <th>Cidade</th>
                            <th>#</th>
                            </thead>
                            <tbody>
                            @foreach($destines as $destine)
                                <tr>
                                    <td>{{ $destine->cep }}</td>
                                    <td>{{ $destine->address }}</td>
                                    <td>{{ $destine->neighborhood }}</td>
                                    <td>{{ $destine->city }}</td>
                                    <td>
                                        <a href='{{ route('destine.edit', $destine->id) }}' title=''><i class= 'glyphicon glyphicon-edit'></i></a>
                                        <a href='{{ route('destine.delete', $destine->id) }}' title=''><i class= 'glyphicon glyphicon-trash'></i></a>
                                    </td>
                                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
