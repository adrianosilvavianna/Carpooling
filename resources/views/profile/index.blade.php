@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            Usuário <a href="/admin/profile/create" title="Nova Galeria" ><i class="pull-right glyphicon glyphicon-plus"></i></a>
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
                    <td>{{ $profile->cpf }}</td>
                    <td>
                        <a href='{{ route('profile.edit', $profile->id) }}' title=''><i class= 'glyphicon glyphicon-edit'></i></a>
                    </td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>

@endsection
