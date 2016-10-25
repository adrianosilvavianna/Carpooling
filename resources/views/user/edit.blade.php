@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            Editar Perfil
        </div>
        <div class="panel-body">
            <form class="form-horizontal" method="post" action="{{ route('user.update', $user->id) }}" >
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nome</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="inputEmail3" name="name"value="{{ $user->name }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-6">
                        <input type="email" class="form-control" id="inputEmail3" name="email" value="{{ $user->email }}" >
                    </div>
                </div>
                <button type="submit" class="btn btn-primary pull-right">Editar</button>
            </form>

        </div>
    </div>

@endsection
