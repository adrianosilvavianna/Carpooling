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

            </div>
        </form>
        <ul class="nav menu">
            <li><a href="{!! route('home') !!}">Home</a></li>
            <li><a href="{{ route('user.car.index') }}"> Veiculos </a></li>
            <li><a href="{{ route('user.destine.index') }}"> Destinos </a></li>
            <li><a href="{{ route('user.agenda.index')}}"> Agenda </a></li>
            <li><a href="{{ route('user.agendaUsers.index')}}"> Caronas </a></li>
            <li role="presentation" class="divider"></li>
            <li><a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </a>
            </li>
        </ul>

    </div><!--/.sidebar-->

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="/"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
        </ol>
    </div><!--/.row-->
    @else
    <br/><br/><br/>
    @yield('getout')
    @endif
    <div class="row">
        <div class="col-lg-12">
            <br/>
            @if (session('error'))
                <div class="alert bg-danger" role="alert">
                    <svg class="glyph stroked cancel"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-cancel"></use></svg> <strong> Error :(</strong>  {!! session('error') !!}
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                </div>
            @endif
            @if (session('success'))
                <div class="alert bg-success" role="alert">
                    <svg class="glyph stroked checkmark"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-checkmark"></use></svg> <strong> Sucesso 🙂 </strong>  {!! session('success') !!}
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                </div>
            @endif
            @if (session('info'))
                <div class="alert bg-primary" role="alert">
                    <svg class="glyph stroked empty-message"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-empty-message"></use></svg> <strong> Infomação 😉 </strong> {!! session('info') !!}
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                </div>
            @endif

            @if (session('warning'))
                <div class="alert bg-warning" role="alert">
                    <svg class="glyph stroked flag"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-flag"></use></svg> <strong> Alerta 😕 </strong> {!! session('warning') !!}
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                </div>
            @endif

        </div>
    </div><!--/.row-->


    <div class="row">
        <div class="col-md-12">
            @yield('content')
            <div id="getting-started"></div>
        </div>
    </div>

</div>
        @section('scripts')

        <script src="{{ asset('js\jquery-1.11.1.min.js') }}"></script>
        <script src="{{ asset('js\bootstrap.min.js') }}"></script>
        <script src="{{ asset('js\easypiechart.js') }}"></script>
        <script src="{{ asset('js\easypiechart-data.js') }}"></script>
        <script src="{{ asset('js\bootstrap-datepicker.js') }}"></script>
        <script scr="{{ asset('bower_components\jquery\dist\jquery.min.js') }}"></script>
        <script src="{{ asset('bower_components\jquery.countdown\dist\jquery.countdown.js') }}"></script>
        <script src="{{ asset('js\lumino.glyphs.js') }}"></script>

        <script type="text/javascript">
        $(function(){
            $('.nav a').filter(function(){return this.href==location.href}).parent().addClass('active').siblings().removeClass('active')
            $('.nav a').click(function(){
                $(this).parent().addClass('active').siblings().removeClass('active')
            })
        })
    </script>


        @show

    </body>
</html>
