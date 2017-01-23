@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            Editar Perfil
        </div>
        <div class="panel-body">
            {!! Form::model(['profile' => '', 'location' => ''], ['route' => ['user.profile.store'], 'class' => 'form-horizontal', 'role' => 'form'] ) !!}
                {{ method_field('POST') }}


                <div class="col-lg-6">
                    <div class="form-group{{ $errors->has('profile.name') ? ' has-error' : '' }}">
                        {!! Form::label('name_id', 'Nome *', ['class' => 'col-sm-2 control-label']) !!}

                        <div class="col-sm-10">
                            {!! Form::text ('profile[name]', null , ['class' => 'form-control', 'id'=>'name_id']) !!}

                            @if ($errors->has('profile.name'))
                                <span class="help-block"><strong>{{ $errors->first('profile.name') }}</strong></span>
                            @endif
                        </div>

                    </div>

                    <div class="form-group{{ $errors->has('profile.email') ? ' has-error' : '' }}">
                        {!! Form::label('email_id', 'E-mail *', ['class' => 'col-sm-2 control-label']) !!}

                        <div class="col-sm-10">
                            {!! Form::text ('profile[email]', null , ['class' => 'form-control', 'id'=>'email_id']) !!}

                            @if ($errors->has('profile.email'))
                                <span class="help-block"><strong>{{ $errors->first('profile.email') }}</strong></span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('profile.cpf') ? ' has-error' : '' }}">
                        {!! Form::label('cpf_id', 'Cpf *', ['class' => 'col-sm-2 control-label']) !!}

                        <div class="col-sm-10">
                            {!! Form::text ('profile[cpf]', null , ['class' => 'form-control', 'id'=>'cpf_id']) !!}

                            @if ($errors->has('profile.cpf'))
                                <span class="help-block"><strong>{{ $errors->first('profile.cpf') }}</strong></span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('location.address') ? ' has-error' : '' }}">
                        {!! Form::label('phone_id', 'Telefone *', ['class' => 'col-sm-2 control-label']) !!}

                        <div class="col-sm-10">
                            {!! Form::text ('profile[phone]', null , ['class' => 'form-control', 'id'=>'phone_id']) !!}

                            @if ($errors->has('profile.phone'))
                                <span class="help-block"><strong>{{ $errors->first('profile.phone') }}</strong></span>
                            @endif
                        </div>
                    </div>

                </div>

                <div class="col-lg-6">
                    @include('location._inputs1')
                    <div class="form-group pull-right">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Criar</button>
                        </div>
                    </div>
                </div>
            {!! Form::close() !!}

        </div>
    </div>

@endsection
