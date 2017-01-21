@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            Editar Perfil
        </div>
        <div class="panel-body">
            <form class="form-horizontal" method="post" action="{{ route('user.car.store') }}" >
                {{ csrf_field() }}
                <input type="hidden" name="user_id" value="{{ \Auth::User()->id }}">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="model_id" class="col-sm-2 control-label">Modelo</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"  name="model" id="model_id" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="color_id" class="col-sm-2 control-label">Cor</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"  name="color" id="color_id" >
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="capacity_id" class="col-sm-2 control-label">Capacidade</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"  name="capacity" id="capacity_id" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="board_id" class="col-sm-2 control-label">Placa</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"  name="board" id="board_id" >
                        </div>
                    </div>
                    <div class="form-group pull-right">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Criar</button>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>

@endsection
