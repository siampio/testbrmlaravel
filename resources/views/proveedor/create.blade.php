@extends('layout.app')

@section('title','product')

@section('content')
<div class="card">
        <div class="card-header">
            <h4 class="mb-0">Añadir producto</h4>    
        </div>
        <div class="card-body">
        

        <form name="form1" id="form1" class="form-group" action="/products" method="POST">
            {{ csrf_field() }}                                                    
            <div class="control-group">
                <label class="control-label" for="nombres">Número de lote</label>
                <div class="controls">
                    <input type="text" name="lote_number" id="lote" placeholder="Número de lote" class="form-control span8 tip" required>
                </div>
            </div>
            
                <div class="control-group">
                    <label class="control-label" for="nombres">Producto</label>
                    <select class="form-control id_product" name="id_product">
                        <option value="">Seleccione una opción </option>
                        @foreach ($products as $product)
                            <option value="{{ $product->id_prod }}">{{ $product->name_prod }}</option>
                        @endforeach   
                    </select>
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
@endsection
    



{{-- <html>
    <head>
        <title>Test</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div>
        </div>
        <p>Hola mundo view</p>
    </body>

</html> --}}