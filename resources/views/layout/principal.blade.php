<!DOCTYPE html>
<html>
<head>
    <meta charset    = "utf-8" />
    <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    <title>Listagem de produtos Laravel</title>
    <meta   name = "viewport" content = "width=device-width, initial-scale=1">
    <link   rel  = "stylesheet" type  = "text/css" media = "screen" href = "{{asset('css/app.css')}}" />
    <link   rel  = "stylesheet" type  = "text/css" media = "screen" href = "{{asset('css/custom.css')}}" />
    <script src  = "main.js"></script>
</head>
<body>
    
    <header>
       <nav class="navbar navbar-default">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{url('produtos')}}">Estoque Laravel</a>
            </div>
            @guest
                @if(Route::has('register'))
                    <ul class = "nav navbar-right">
                        <li><a href="{{ route('login') }}"> Login </a></li>
                        <li><a href="{{ route('register') }}"> Registrar </a></li>
                    </ul>
                @endif
                @else
                <ul class="nav navbar-right">
                    <li><a href="{{url('produtos')}}">Listagem</a></li>
                    <li><a href="{{url('produtos/novo')}}">Novo</a></li>
                    <li><a href = "{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit(); ">Logout </a></li>
                    
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                     
                </ul>
            @endguest
            </div>
        </nav>
    </header>
    
    <div class = "container">

        @yield('conteudo')   
    </div>
</body>
</html>