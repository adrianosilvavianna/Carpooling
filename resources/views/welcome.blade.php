@extends('layouts.app')

@section('content')

            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">

                </div>
            </div>



        <div class="panel panel-default">
            <div class="panel-heading">Site Traffic Overview</div>
            <div class="panel-body">
                <div class="canvas-wrapper">
                    <canvas class="main-chart" id="line-chart" height="354" width="1064" style="width: 1064px; height: 354px;"></canvas>
                </div>
            </div>
        </div>


@endsection
