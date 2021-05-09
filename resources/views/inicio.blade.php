@extends('plantilla')

@section('contenido')
    

  <!-- redes sociales -->
  <div class="container-fluid mb-5">
    <div class="row p-3 d-flex justify-content-center text-center text-white shadow fixed-top bg-success">
      <div class="col-3 text-white">
        <a href="https://facebok.com" target="_blank"><i class="fab fa-facebook fa-2x text-white"></i></a>
      </div>
      <div class="col-3">
        <i class="fab fa-twitter fa-2x"></i>
      </div>
      <div class="col-3">
        <i class="fas fa-phone fa-2x"></i>
      </div>
      <div class="col-3">
          <i class="fab fa-instagram fa-2x"></i>
      </div>
    </div>
  </div>
  
  
   <!-- carousel del menu -->
  
  
  
  <div class="container-fluid ">
    <div class="row p d-flex justify-content-center">
      <div class="col-12 text-center">
        <img src="img/menu2.png" class="img-fluid logo" alt="">  
            <h1>Especialidades de hoy</h1>
      </div>
      
  <div class="col-12 mt-0 p-2 px-5">
        <div class="single-item"><!--  Inicio del carousel -->
  

@forelse ($especialidad as $item)
<div class="p-0">
  <div class="bg-image carrusel" style="background-image: url('{{Storage::url($item->imagen1)}}');">
    <div class="mask ocultar mr-5 px-3" style="background-color: rgba(0, 0, 0, 0.5)">
      <div class="d-flex justify-content-center align-items-center h-100 ">
        <div class="text-white">
          <h3 class="mb-3 font-weight-bold">Nombre del platillo</h3>
          <p class=" p-2 h5"> {{$item->descripcion}}  </p>
          <div class="row p-0 d-flex text-center justify-content-center mt-5">
            <div class="col-12 m-0"> <a href="{{route('prepara')}}" class="btn btn-success rounded-pill text-uppercase  btn-lg">Preparar pedido y seleccionar ingredientes</a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> 
@empty
    <li>No hay nada que mostrar</li>
@endforelse 

        </div><!--  Fin del carousel -->
      </div>
    </div>
  </div>
  
<div class="container-fluid">
  <div class="row mt-5 justify-content-center">
    <div class="col-12 mb-4">
      <h2 class="text-center">Menu general</h2>
    </div>

      @forelse ($platillo as $item)

      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div class="card">
          <div class="card-header text-white bg-primary text-center">
            {{$item->nombre}}
          </div>
          <div class="card-body">
            <img src="{{Storage::url($item->imagen1)}}" class="img-fluid" alt="">
            <p class="p-3">{{$item->descripcion}}.</p>
          </div>
          <div class="card-footer p-0">
            <button class="btn btn-success btn-sm text-uppercase btn-block rounded-pill">Preparar pedido</button>
          </div>
        </div>
      </div>
          
      @empty
          <li>Nada para mostrar</li>
      @endforelse

   </div>
</div>
@endsection