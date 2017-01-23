@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            Editar Perfil
        </div>
        <div class="panel-body">
            <form class="form-horizontal" method="post" action="{{ route('user.car.store') }}" >
                <div class="col-lg-6">

                    <div class="form-group{{ $errors->has('model') ? ' has-error' : '' }} ">
                        <label for="model_id" class="col-sm-2 control-label">Modelo</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"  name="model" id="model_id" >
                            @if ($errors->has('model'))
                                <span class="help-block"><strong>{{ $errors->first('model') }}</strong></span>
                            @endif
                        </div>

                    </div>
                    <div class="form-group{{ $errors->has('color') ? ' has-error' : '' }} ">
                        <label for="color_id" class="col-sm-2 control-label">Cor</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"  name="color" id="color_id" >
                            @if ($errors->has('color'))
                                <span class="help-block"><strong>{{ $errors->first('color') }}</strong></span>
                            @endif
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group{{ $errors->has('capacity') ? ' has-error' : '' }} ">
                        <label for="capacity_id" class="col-sm-2 control-label">Capacidade</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control"  name="capacity" id="capacity_id" >
                            @if ($errors->has('capacity'))
                                <span class="help-block"><strong>{{ $errors->first('capacity') }}</strong></span>
                            @endif
                        </div>

                    </div>
                    <div class="form-group{{ $errors->has('board') ? ' has-error' : '' }} ">
                        <label for="board_id" class="col-sm-2 control-label">Placa</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"  name="board" id="board_id" >
                            @if ($errors->has('board'))
                                <span class="help-block"><strong>{{ $errors->first('board') }}</strong></span>
                            @endif
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
