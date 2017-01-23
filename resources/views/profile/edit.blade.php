@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            Editar Perfil
        </div>
        <div class="panel-body">
            
            {!! Form::model(['profile' => $profile, 'location' => $profile->Location], ['route' => ['user.profile.update', $profile], 'class' => 'form-horizontal', 'role' => 'form'] ) !!}

                {{ method_field('POST') }}
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="name_id" class="col-sm-2 control-label">Nome</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"  name="profile[name]" id="name_id" value="{{ $profile->name }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email_id" class="col-sm-2 control-label">E-mail</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"  name="profile[email]" id="email_id" value="{{ $profile->email }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="cpf_id" class="col-sm-2 control-label">Cpf</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="profile[cpf]" id="cpf_id" value="{{ $profile->cpf }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phone_id" class="col-sm-2 control-label">Telefone</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="profile[phone]" id="phone_id" value="{{ $profile->phone }}">
                        </div>
                    </div>                    
                </div>
                <div class="col-lg-6">
                    @include('location._inputs1')
                    <div class="form-group pull-right">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Editar</button>
                        </div>
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>

@endsection
