@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            Editar Destino 
        </div>
        <div class="panel-body">
                {!! Form::model(['destine' => $destine, 'location' => $destine->Location], ['route' => ['user.destine.update', $destine], 'class' => 'form-horizontal', 'role' => 'form'] ) !!}
                {{ method_field('PUT') }}

                <div class="col-lg-11">
                    @include('location._inputs1')
                    <div class="form-group pull-right">
                    <div >
                        <button type="submit" class="btn btn-default">Criar</button>
                    </div>
                </div>
                 {!! Form::close() !!}
            </form>

        </div>
    </div>

@endsection