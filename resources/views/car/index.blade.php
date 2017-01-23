@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            Carros  <a href="{{ route('user.car.create') }}" title="Nova Galeria" ><i class="pull-right glyphicon glyphicon-plus"></i></a>
        </div>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                <th>Modelo</th>
                <th>Cor</th>
                <th>Capacidade</th>
                <th>Placa</th>
                <th>#</th>
                </thead>
                <tbody>
                @foreach($cars as $car)
                    <tr>
                        <td>{{ $car->model }}</td>
                        <td>{{ $car->color }}</td>
                        <td>{{ $car->capacity }}</td>
                        <td>{{ $car->board }}</td>
                        <td>
                            <a href='{{ route('user.car.edit', $car) }}' title='Editar'><i class= 'glyphicon glyphicon-edit'></i></a>
                            <a href='{{ route('user.car.delete', $car) }}' data-method="get" title='Excluir'><i class= 'glyphicon glyphicon-trash'></i></a>
                        </td>
                        
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection