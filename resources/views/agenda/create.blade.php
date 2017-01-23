@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading">
        Criar Percurso
    </div>
    <div class="panel-body">
        <form class="form-horizontal" method="post" action="{{ route('user.agenda.store') }}" >
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="model_id" class="col-sm-2 control-label">Destino</label>
                    <div class="col-sm-10">
                        <select class="selectpicker col-sm-12 form-control" name="destine_id">
                            @foreach($destines as $destine)
                                <option value="{{ $destine->id }}">{{ $destine->Location->address }} | {{ $destine->Location->neighborhood }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="model_id" class="col-sm-2 control-label">Carro</label>
                    <div class="col-sm-10">
                        <select class="selectpicker col-sm-12 form-control" name="car_id" >
                            @foreach($cars as $car)
                                <option value="{{ $car->id }}">{{ $car->model }} | {{ $car->capacity }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group{{ $errors->has('data_time') ? ' has-error' : '' }} ">
                    <label for="capacity_id" class="col-sm-2 control-label">Data</label>
                    <div class="col-sm-10">
                        <div class="input-group col-sm-12">
                            <input type="datetime-local" class=" form-control date" name="data_time">
                            @if ($errors->has('data_time'))
                                <span class="help-block"><strong>{{ $errors->first('data_time') }}</strong></span>
                            @endif
                        </div>

                    </div>

                </div>
                <div class="form-group">
                    <div class="col-sm-10">
                        <div class="input-group col-sm-12">
                        </div>
                    </div>
                </div>
                <div class="form-group pull-right">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-default">Criar</button>
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>

@endsection
