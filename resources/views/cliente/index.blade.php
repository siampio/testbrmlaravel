@extends('layout.app')

@section('title','product')

@section('content')

<div class="card">
        <div class="card-header">
            <h4 class="mb-0">Añadir producto</h4>    
        </div>
        <div class="card-body">
        

        <form name="form1" id="form1" class="form-group" action="/compra" method="POST">
            {{ csrf_field() }}                                                    
            
            
            <div class="control-group">
                <label class="control-label" for="nombres">Producto</label>
                <select class="form-control id_product" name="id_product">
                    <option value="">Seleccione una opción </option>
                    @foreach ($inventories as $inventory)
                        <option value="{{ $inventory->id_prod }}">{{ $inventory->name_prod }}</option>
                    @endforeach   
                </select>
            </div>                    
            									
            <div class="control-group">
                <label class="control-label" for="nombres">Cantidad</label>
                <div class="controls">
                    <input type="number" name="cantidad_prod" id="cantidad_prod" placeholder="Cantidad" class="form-control span8 tip" min="1" required>
                </div>
            </div>            
            <br><br>                             
            <div class="control-group">
                <div class="controls">
                    <button type="submit" name="input" id="input" class="btn btn-sm btn-primary">Realizar Compra</button>
                </div>
            </div>
        </form>
    </div>
    </div>
    
    <div class="card">
        <div class="card-header">
                <h4 class="mb-0">Añadir producto</h4>    
        </div>
        <div class="card-body">
                <div class="responsive-table">
                    <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                        <thead bgcolor="#eeeeee" align="center">
                                <tr>
                                <th>Nombre</th>                                                    
                                <th>Cantidad</th>
                                <th>Precio</th>
                                <th>Total </th>
                                <th>--</th>                                               
                                
                        </thead>
                        @foreach (session()->get('cart') as $item)
                        <thead>                                                    
                                
                            
                        </thead>
                        @endforeach
                    </table>
                </div>
        </div>

    </div>
@endsection