@extends('plantilla')
@section('contenido')
<div class="container">

    <div class="row    justify-content-around ">

      <div class="col-12 bg-danger mt-3 shadow-1-strong ">
        <h3 class="text-white text-center font-weight-bold">Datos de envio</h3>
        <form action="{{route('pedido.store')}}" method="POST">
          @csrf
        <div class="row d-flex justify-content-around m-4">
        
          <div class="col-lg-4 col-md-6">
            <input type="text" class="form-control-lg form-control {{$errors->first('cliente') ? 'is-invalid' : ''  }}" name="cliente"  placeholder="Tu nombre completo">
            {!!$errors->first('cliente', '<div class="alert alert-danger p-1"><small> :message </small></div>')!!}
            
          </div>
          <div class="col-lg-5 col-md-6">
            <input type="text" class="form-control-lg form-control {{$errors->first('direccion') ? 'is-invalid' : ''}} " name="direccion" placeholder="La dirección a donde sera enviado el pedido" name="" id="">
            {!!$errors->first('direccion', '<div class="alert alert-danger p-1"><small> :message </small></div>')!!}
            
          </div>
          <div class="col-lg-3 col-md-6">
            <input type="text" class="form-control-lg form-control {{$errors->first('telefono') ? 'is-invalid' : '' }} " name="telefono" placeholder="Número de teléfono">
            {!! $errors->first('direccion', '<div class="alert alert-danger p-1"><small> :message </small></div>') !!}
          </div>

        
       
        </div>
 
      </div>

      <div class="col-lg-12 col-md-12 p-3 shadow-1-strong   bg-white ">
        <h1 class="text-center mb-5 fuente">Agrega o quita ingredientes de tu platillo</h1>
        <h3 class="mt-3">Quitar ingredientes del platillo</h3>
  
        <div class="row font-weight-bold d-flex justify-content-center border p-3 " id="back">
          


          @php
              $contador = 0;
              $colores = ['bg-success', 'bg-secondary', 'bg-danger', 'bg-warning', 'bg-dark', 'bg-info', 'bg-dark'];
              
          @endphp
          @forelse ($normal as $item)
          @php
              $position_color = rand(0,6)
          @endphp
          <div class="col-auto  m-2 p-2 {{$colores[$position_color]}} text-white border border-primary text-center ingrediente btn-sm">
            <input type="hidden" value="{{$item->nombre}}" name="ingrediente{{$contador++}}">
            {{$item->nombre}}
            <input type="hidden" value="{{$item->platillo_id}}" name="id">
          </div>
              
          @empty
              
          @endforelse
          


      </div>
      <br>
      <div class="col-lg-12 mt-5  col-md-12  bg-white">
        <h3>Agregar ingredientes extra</h3>
      
        <div class="row font-weight-bold d-flex justify-content-center" id="destino">
     
          <select class="js-example-basic-multiple" class="form-control form-control-lg" name="extras[]" multiple="multiple">
              @forelse ($extra as $item)
              <option value="{{$item->nombre}}" >{{$item->nombre}} | <strong>$ {{$item->precio}}</strong></option>  
              @empty
                  
              @endforelse  
                
              
           </select>
        
        </div>
      </div>
      <div class="col-12 mt-5">
        <button class="btn btn-success btn-block " type="submit"><h3>Enviar pedido</h3></button>
           
      </form>
      </div>
    </div>


  </div>    
@endsection