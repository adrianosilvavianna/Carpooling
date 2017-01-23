@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            Agendas <a href="{{ route('user.agendaUsers.create') }}" title="Nova Galeria" ><i class="pull-right glyphicon glyphicon-plus"></i></a>
        </div>

        <div class="panel-body">

            <table class="table table-hover">
                <thead>
                <th>ID</th>
                <th>Motorista</th>
                <th>Destino</th>
                <th>Carro</th>
                <th>Capacidade</th>
                <th>Data</th>
                <th>#</th>
                </thead>
                <tbody>
                @foreach($agendas as $agenda)
                    <tr>
                        <td> {{ $agenda->id }} </td>
                        <td> {{ $agenda->User->name }} </td>
                        <td> {{ $agenda->Destine->Location->address }} | {{ $agenda->Destine->Location->neighborhood }} </td>
                        <td> {{ $agenda->Car->model }} </td>
                        @if($agenda->Users()->count() > 0)
                            <td> {{ $agenda->Car->capacity - $agenda->Users->count()}} </td>
                        @else
                            <td> {{ $agenda->Car->capacity }} </td>
                        @endif
                        <td>
                            {{ $agenda->data_time }}
                        </td>
                        <td>
                        @if($agenda->Users()->count() > 0)
                            <a href='{{ route('user.agendaUsers.show', $agenda) }}' title='Detalhes'><i class= 'glyphicon glyphicon-eye-open'></i></a>
                        @endif
                            <a href="{{ route('user.agendaUsers.store', $agenda) }}" title='Pegar Carona'><i class= 'glyphicon glyphicon-send'></i></a>
                            <a href='{{ route('user.agendaUsers.delete', $agenda) }}' title='Sair'><i class= 'glyphicon glyphicon-thumbs-down'></i></a>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>

@endsection
