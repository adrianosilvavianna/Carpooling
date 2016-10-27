@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            Carros | <a href="{{ route('user.car.create') }}">+ Novo</a>
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
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection