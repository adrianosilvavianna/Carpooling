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
                    <td>{{ $profile->name }}</td>
                    <td>{{ $profile->email }}</td>
                    <td>
                        <a href='{{ route('user.profile.edit', $profile) }}' title=''><i class= 'glyphicon glyphicon-edit'></i></a>
                    </td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>

@endsection
