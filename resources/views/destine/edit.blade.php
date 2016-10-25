@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            Editar Destino N° {{ $destine->id }}
        </div>
        <div class="panel-body">
            <form class="form-horizontal" method="post"   action="{{ route('destine.update', $destine->id) }}" >
                {{ csrf_field() }}
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