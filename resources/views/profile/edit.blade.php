@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            Editar Perfil
        </div>
        <div class="panel-body">
            <form class="form-horizontal" method="post"   action="{{ route('profile.update', $profile->id) }}" >
                {{ csrf_field() }}
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="name_id" class="col-sm-2 control-label">Nome</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"  name="name" id="name_id" placeholder="name" value="{{ $profile->name }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email_id" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="email" id="email_id" placeholder="Email" value="{{ $profile->email }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="cpf_id" class="col-sm-2 control-label">Cpf</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="cpf" id="cpf_id" placeholder="Cpf" value="{{ $profile->cpf }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phone_id" class="col-sm-2 control-label">Telefone</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="phone" id="phone_id" placeholder="Telefone" value="{{ $profile->phone }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="complement_id" class="col-sm-2 control-label">Complemento</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"  name="complement" id="complement_id" placeholder="Complemento" value="{{ $profile->complement }}">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="neighborhood_id" class="col-sm-2 control-label">Bairro</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="neighborhood_id" name="neighborhood" placeholder="Bairro" value="{{ $profile->neighborhood }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address_id" class="col-sm-2 control-label">Endereço</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"  name="address" id="address_id" placeholder="Rua " value="{{ $profile->address }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="number_id" class="col-sm-2 control-label">Numero</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="number_id" name="numero" placeholder="Numero" value="{{ $profile->number }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="city_id" class="col-sm-2 control-label">Cidade</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="city_id" name="city" placeholder="Cidade" value="{{ $profile->city }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="country_id" class="col-sm-2 control-label">País</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="country_id" name="country" placeholder="País" value="{{ $profile->country }}">
                        </div>
                    </div>
                    <div class="form-group pull-right">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Editar</button>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>

@endsection
