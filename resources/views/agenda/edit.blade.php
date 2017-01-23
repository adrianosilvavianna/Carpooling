@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading">
        Editar Agenda <i class="pull-right" id="getting-started"></i>
    </div>
    <div class="panel-body">
        <form class="form-horizontal" method="post" action="{{ route('user.agenda.update', $agenda) }}" >
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
                    <div class="input-group date">
                        <input type="datetime-local" class="form-control"  name="data_time" >
                        <input type="hidden" value="{{$agenda->data_time}}" id="data_time">
                        @if ($errors->has('data_time'))
                            <span class="help-block"><strong>{{ $errors->first('data_time') }}</strong></span>
                        @endif
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


@section('scripts')
    @parent
    <script type="text/javascript">
        $('#getting-started').countdown($('#data_time').val(), function(event) {
            $(this).html(event.strftime('Expira em: %w semanas %d dias %H:%M:%S'));
        });
    </script>

@show