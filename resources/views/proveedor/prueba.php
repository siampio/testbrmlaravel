<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
	<meta name="author" content="">
    <title>Test</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
    crossorigin="anonymous">

</head>
<body>
    <div>
        <nav class="navbar navbar-light navbar-expand-md navigation-clean">
            <div class="container"><a class="navbar-brand" href="#">Sistema de ventas</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse"
                    id="navcol-1">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="#">Proveedor</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#">Cliente</a></li>                        
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">Comprar producto</h4>    
                </div>
                <div class="card-body">
                <form name="form1" id="form1" class="form-horizontal row-fluid" action="/PruebaController" method="POST">                                                          
                    <div class="control-group">
                        <label class="control-label" for="nombres">Número de lote</label>
                        <div class="controls">
                            <input type="text" name="lote" id="lote" placeholder="Número de lote" class="form-control span8 tip" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="nombres">Producto</label>
                        <div class="controls">
                            <input type="text" name="name_producto" id="name_producto" placeholder="Producto" class="form-control span8 tip" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="nombres">Fecha de vencimiento</label>
                        <div class="controls">
                            <input type="date" name="date_ven" id="date_ven" placeholder="Fecha de vencimiento" class="form-control span8 tip" min="2019-01-01" required>
                        </div>
                    </div>										
                    <div class="control-group">
                        <label class="control-label" for="nombres">Cantidad</label>
                        <div class="controls">
                            <input type="number" name="cantidad_prod" id="cantidad_prod" placeholder="Cantidad" class="form-control span8 tip" min="1" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="nombres">Precio</label>
                        <div class="controls">
                            <input type="text" name="precio_prod" id="precio_prod" placeholder="Precio producto" class="form-control span8 tip" required>
                        </div>
                    </div>
                    <br><br>                             
                    <div class="control-group">
                        <div class="controls">
                            <button type="submit" name="input" id="input" class="btn btn-sm btn-primary">Registrar</button>
                        </div>
                    </div>
                </form>
            </div>
            </div>  

        </div>
    </div>
</body>

</html>