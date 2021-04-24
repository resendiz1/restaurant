@extends('plantilla')
@section('contenido')



<div class="container  border">
  <div class="row d-flex bg-success rounded p-3 justify-content-center">
    <div class="col-12 text-center">
      <h1 class="text-white">Agregando Platillos</h1>


        {!!$errors->first('nombre', '<li class="text-danger bg-white m-0">:message </li>')!!}
        {!!$errors->first('precio', '<li class="text-danger bg-white m-0">:message </li>')!!}
        {!!$errors->first('descripcion', '<li class="text-danger bg-white m-0">:message </li>')!!}
        {!!$errors->first('imagen1', '<li class="text-danger bg-white m-0">:message </li>')!!}
        {!!$errors->first('imagen2', '<li class="text-danger bg-white m-0">:message </li>')!!}
        {!!$errors->first('imagen3', '<li class="text-danger bg-white m-0">:message </li>')!!}
      
        @if (session('success'))
        <div class="alert alert-info h3">   {!! session('success')  !!}</div>
        @endif
      

    </div>
  </div>
    <div class="row mt-5 d-flex justify-content-center">
      <div class="col-10 mb-3">
        <button class="btn btn-success"  data-mdb-toggle="modal" data-mdb-target="#exampleModal"> <i class="fa fa-plus"></i> Agregar a platillos normales</button>
      </div>
      <div class="col-10">
        <table class="table table-striped  table_wrapper text-center border">
          <thead>
              <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Imagen</th>
                <th>Actualizar</th>
                <th>Borrar</th>
                <th> <i class="fa fa-plus"> Ingredientes</i> </th>
              </tr>
          </thead>
          <tbody>
          
              @forelse ($platillos as $item)
    
            <tr>
              <th class="centrado-vertical">{{$item->nombre}}</th>
              <th class="centrado-vertical" >${{$item->precio}}</th>
              <th class="centrado-vertical" > <img src="{{Storage::url($item->imagen1 )}}" class="img-fluid" style="width: 250px;" alt=""> </th>
              <th class="centrado-vertical" > <button class="btn btn-primary"> Actualizar </button> </th>
              <th class="centrado-vertical" > <button class="btn btn-danger">Borrar</button> </th>
              <th class="centrado-vertical" >  <button class="btn btn-success"> Agregar ingredientes </button> </th>
            </tr>
              @empty
                  <li>No hay ni madres</li>
              @endforelse
            

          </tbody>
        </table>
      </div>
    </div>
  </div>






<!-- Button trigger modal -->


<!-- Modal -->
<div
class="modal fade"
id="exampleModal"
tabindex="-1"
aria-labelledby="exampleModalLabel"
aria-hidden="true"
>
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Agregar platillo normal</h5>
      <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <form action="{{route('platillos.store')}}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="form-group">
          <label for="">Nombre</label>
          <input type="text" class="form-control" value="conchas" name="nombre">
        </div>
        <div class="form-group">
          <label for="">Precio $</label>
          <input type="number" class="form-control" value="33"  name="precio">
        </div>
        <br>
        <div class="form-outline">
          <textarea class="form-control" name="descripcion" rows="4"></textarea>
          <label class="form-label" for="textAreaExample">Descripción</label>
        </div>
        <div class="form-group">
          <label for="">Imagenes</label>
          <input type="file" name="imagen1" class="form-control" id="">
          <input type="file" name="imagen2" class="form-control" id="">
          <input type="file" name="imagen3" class="form-control" id="">
        </div>
        <div class="form-group mt-3 text-center">
          <label for="">¿Especialidad?</label> <br>
          <input class="form-check-input" type="checkbox" name="especialidad"  id="flexCheckDefault"
        />
        </div>
    </div>
    <div class="modal-footer">
      <button type="submit" class="btn btn-primary" >
        Agregar
      </button>
    </form>
      <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Cancelar</button>
    </div>
  </div>
</div>
</div>

@endsection