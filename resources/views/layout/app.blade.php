<html>
    <head>
        <title>TestBRM - @yield('title')</title>        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <body>

        <div>
            <nav class="navbar navbar-light navbar-expand-md navigation-clean">
                    <div class="container"><a class="navbar-brand" href="#">Sistema de ventas</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse"
                            id="navcol-1">
                            <ul class="nav navbar-nav ml-auto">
                                <li class="nav-item" role="presentation"><a class="nav-link active" href="/products">Proveedor</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="/compra">Cliente</a></li>                        
                            </ul>
                        </div>
                    </div>
            </nav>
        </div>
        <div class="container">
            @yield('content')
        </div>
        
    </body>
</html>