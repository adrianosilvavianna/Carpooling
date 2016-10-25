@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            Usuário
        </div>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                <th>Nome</th>
                <th>Email</th>
                <th>#</th>
                </thead>
                <tbody>
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href='{{ route('user.edit', $user->id) }}' title='Editar'><i class= 'glyphicon glyphicon-edit'></i></a>
                    </td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>

@endsection