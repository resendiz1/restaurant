@extends('plantilla')
@section('contenido')
<div class="container-fluid">

    <div class="row m-3 shadow p-2 justify-content-around myborder" style="background-color: lightcoral;">
      <div class="col-12  text-center">
        <h1 class="letra text-white font-weight-bold">BROWNIES</h1>
    </div>
      <div class="col-12 text-center p-3">
        <img src="{{asset('img/maenu.png')}}" class="img-fluid logo" alt="">
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
              <button class="btn btn-success" type="submit">Submit</button>
          </form>
        </div>
      </div>
      <div class="col-8">
        <button class="btn btn-success btn-block" type="submit"><h5>Lanzar pedido</h5></button>
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