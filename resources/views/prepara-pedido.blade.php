@extends('plantilla')
@section('contenido')
<div class="container-fluid">

    <div class="row m-3 shadow p-2 justify-content-around myborder" style="background-color: lightcoral;">
      <div class="col-12  text-center">
        <h1 class="letra text-white font-weight-bold">Haciendo tu pedido</h1>
    </div>

      <div class="col-12 ">
        <form action="">
        <div class="row d-flex justify-content-around m-4">
        
          <div class="col-lg-4 col-md-6">
            <input type="text" class="form-control" placeholder="Tu nombre completo">
          </div>
          <div class="col-lg-4 col-md-6">
            <input type="text" class="form-control" placeholder="La dirección a donde sera enviado el pedido" name="" id="">
          </div>
          <div class="col-lg-4 col-md-6">
            <input type="text" class="form-control" placeholder="Numero de telefono">
          </div>

        
       
        </div>
      </form>
      </div>

      <div class="col-lg-12 col-md-12 p-3 text-center  bg-white ">
        <h1>Ingredientes que lleva</h1>
        <form action="{{route('pedido.store')}}" method="POST">
          @csrf
        <div class="row font-weight-bold d-flex justify-content-center" id="back">
          @php
              $contador = 0;
          @endphp
          @forelse ($normal as $item)
          
          <div class="col-auto shadow m-2 p-2 bg-warning text-white border border-primary text-center ingrediente btn-sm">
            <input type="hidden" value="{{$item->nombre}}" name="ingrediente{{$contador++}}">
            {{$item->nombre}}
            <input type="hidden" value="{{$item->platillo_id}}" name="id">
          </div>
              
          @empty
              
          @endforelse
          


      </div>
      <div class="col-lg-12 mt-3 p-4 col-md-12 m-2 text-center bg-white">
        <h1>Agregar ingredientes extra</h1>
        <div class="row font-weight-bold d-flex justify-content-center" id="destino">
     
              <select class="js-example-basic-multiple" name="extras[]" multiple="multiple">
              @forelse ($extra as $item)
              <option value="{{$item->nombre}}">{{$item->nombre}} | <strong>$ {{$item->precio}}</strong></option>  
              @empty
                  
              @endforelse  
                
              
              </select>
        
        </div>
      </div>
      <div class="col-12">
        <button class="btn btn-success btn-block" type="submit">Submit</button>
           
      </form>
      </div>
    </div>
    <div class="row m-3 justify-content-around" style="background-color:  lightcoral;">
      <div class="col-lg-3 col-md-5 p-3 m-3 shadow bg-white">
        
        <img src="img/2.jpg" class="img-fluid" alt="">
      </div>
      <div class="col-lg-3 col-md-5 p-3 m-3 shadow bg-white">
        <img src="img/2.jpg" class="img-fluid" alt="">
      </div>
      <div class="col-lg-3 col-md-5 p-3 m-3 shadow bg-white">
        <img src="img/2.jpg" class="img-fluid" alt="">
      </div>
    </div>

  </div>    
@endsection