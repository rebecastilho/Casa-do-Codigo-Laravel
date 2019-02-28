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
                <a class="navbar-brand" href="/produtos">Estoque Laravel</a>
            </div>
            
            <ul class="nav navbar-right">
                <li><a href="/produtos">Listagem</a></li>
                <li><a href="/produtos/novo">Novo</a></li>
            </ul>
           
        </nav>
    </header>
    
    <div class = "container">

        @yield('conteudo')   
    </div>
</body>
</html>