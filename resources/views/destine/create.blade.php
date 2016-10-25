@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            Criar Destino
        </div>
        <div class="panel-body">

            <form action="{{route('destine.store')}}" class="form-horizontal">
                <div class="col-lg-10">
                    @include('location._inputs')
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
