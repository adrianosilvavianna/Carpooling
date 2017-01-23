@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            Diários  <a href="{{ route('user.agenda.create') }}" title="Nova Galeria" ><i class="pull-right glyphicon glyphicon-plus"></i></a>
        </div>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                <th>ID</th>
                <th>Motorista</th>
                <th>Destino</th>
                <th>Carro</th>
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
                        <td> {{ $agenda->data_time }}</td>
                        <td>
                            <a href="{{ route('user.agenda.edit', $agenda) }}" title='Editar'><i class= 'glyphicon glyphicon-edit'></i></a>
                            <a href='{{ route('user.agenda.delete', $agenda) }}' title='Excluir'><i class= 'glyphicon glyphicon-trash'></i></a>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection

@section('scripts')
    @parent
    <script type="text/javascript">
        $('#getting-started').countdown($('#data_time').val(), function(event) {
            $(this).html(event.strftime('%w semana %d dias %H:%M:%S'));
        });
    </script>

@show