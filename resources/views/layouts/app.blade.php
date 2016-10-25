<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Carpooling</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('fonts\glyphicons-halflings-regular.eot') }}">
    <link rel="stylesheet" href="{{ asset('css\bootstrap.min.css') }}">
    <link href="{{ asset('css\datepicker3.css') }}" rel="stylesheet">
    <link href="{{ asset('css\styles.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    <!--Icons-->
    <script src="js/lumino.glyphs.js"></script>

</head>
<body id="app-layout">

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href=""><span>Car</span>pooling</a>
            @if (Auth::guest())
                <a href="{{ url('/login') }}" class="navbar-brand pull-right"> Login </a>
                <a href="{{ url('/register') }}" class="navbar-brand pull-right" > Register </a>

            @else
            <ul class="user-menu">

                <li class="dropdown pull-right">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> {{ \Auth::User()->name }} <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ route('user.index') }}"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Usuário </a></li>
                        <li><a href="{{ route('user.profile.index') }}"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Perfil </a></li>
                        <li><a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a></li>

                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>

                    </ul>
                </li>
            @endif
            </ul>
        </div>

    </div><!-- /.container-fluid -->
</nav>

@if (!Auth::guest())

<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <form role="search">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
        </div>
    </form>
    <ul class="nav menu">
        <li class="active"><a href="{!! route('home') !!}"><svg class="glyph stroked desktop"><use xlink:href="#stroked-desktop"/></svg>
                Home </a></li>

        <li><a href="widgets.html"><svg class="glyph stroked location pin"><use xlink:href="#stroked-location-pin"/></svg> Caronas </a></li>
        <li><a href="charts.html"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Veiculos </a></li>
        <li><a href="tables.html"><svg class="glyph stroked car"><use xlink:href="#stroked-table"></use></svg> Perfil </a></li>

        <li role="presentation" class="divider"></li>

        <li><a href="/logout"><svg class="glyph stroked arrow up"><use xlink:href="#stroked-arrow-up"/></svg> Logout </a></li>
    </ul>

</div><!--/.sidebar-->

@endif

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

        @if (session('error'))
            <div class="alert alert-danger ">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> Error :(</h4>
                {!! session('error') !!}
            </div>
        @endif

        @if (session('success'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Sucesso :)</h4>
                {!! session('success') !!}
            </div>
        @endif

        @if (session('info'))
            <div class="alert alert-info">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-info"></i> Infomação ;)</h4>
                {!! session('info') !!}
            </div>
        @endif

        @if (session('warning'))
            <div class="alert alert-warning">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-warning"></i> Alerta :/</h4>
                {!! session('warning') !!}
            </div>
        @endif

        @yield('content')
    </div>

<script src="{{ asset('js\jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('js\bootstrap.min.js') }}"></script>
<script src="{{ asset('js\chart.min.js') }}"></script>
<script src="{{ asset('js\chart-data.js') }}"></script>
<script src="{{ asset('js\easypiechart.js') }}"></script>
<script src="{{ asset('js\easypiechart-data.js') }}"></script>
<script src="{{ asset('js\bootstrap-datepicker.js') }}"></script>


</body>
</html>
