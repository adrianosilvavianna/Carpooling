@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            Criar Destino
        </div>
        <div class="panel-body">

                {!! Form::model(['destine' => '', 'location' => ''], ['route' => ['user.destine.store'], 'class' => 'form-horizontal', 'role' => 'form'] ) !!}
                {{ method_field('POST') }}
                <div class="col-lg-11">
                    @include('location._inputs1')
                    <div class="form-group pull-right">
                    <div >
                        <button type="submit" class="btn btn-default">Criar</button>
                    </div>
                </div>
                </div>
                
                {!! Form::close() !!}
                </div>
            </form>

        </div>
    </div>

@endsection
