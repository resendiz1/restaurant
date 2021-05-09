@extends('plantilla')
@section('contenido')



<div class="container  border">
  <div class="row d-flex bg-success rounded p-3 justify-content-center">
    <div class="col-12 text-center">
      <h1 class="text-white">Agregando Platillos</h1>


        {!!$errors->first('nombre', '<li class="text-white bg-danger font-weight-bold m-0">:message </li>')!!}
        {!!$errors->first('precio', '<li class="text-white bg-danger font-weight-bold m-0">:message </li>')!!}
        {!!$errors->first('descripcion', '<li class="text-white bg-danger font-weight-bold m-0">:message </li>')!!}
        {!!$errors->first('imagen1', '<li class="text-white bg-danger font-weight-bold m-0">:message </li>')!!}
        {!!$errors->first('imagen2', '<li class="text-white bg-danger font-weight-bold m-0">:message </li>')!!}
        {!!$errors->first('imagen3', '<li class="text-white bg-danger font-weight-bold m-0">:message </li>')!!}
      
        @if (session('success'))
        <div class="alert alert-info h3">   {!! session('success')  !!}</div>
        @endif
        @if (session('deleted'))
        <div class="alert alert-info h3">   {!! session('deleted')  !!}</div>            
        @endif
        @if (session('updated'))
        <div class="alert alert-info h3">   {!! session('updated')  !!}</div> 
        @endif
      

    </div>
  </div>
    <div class="row mt-5 d-flex justify-content-center">
      <div class="col-12 mb-3">
        <button class="btn btn-success"  data-mdb-toggle="modal" data-mdb-target="#exampleModal"> <i class="fa fa-plus"></i> Agregar a platillos normales</button>
      </div>
      <div class="col-12">
        <table class="table table-striped  table_wrapper text-center">
          <thead>
              <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Imagen</th>
                <th>¿Especialidad?</th>
                <th>Actualizar</th>
                <th>Borrar</th>
                <th> <i class="fa fa-plus"> Ingredientes</i> </th>
                <th>  <i class="fa fa-plus-square mx-3">Ingre. Extra</i> </th>
                <th></th>
          
              </tr>
          </thead>
          <tbody>
          
              @forelse ($platillos as $item)
    
            <tr>
              <th class="centrado-vertical">{{$item->nombre}}</th>
              <th class="centrado-vertical" >${{$item->precio}}</th>
              <th class="centrado-vertical" > <img src="{{Storage::url($item->imagen1 )}}" class="img-fluid" style="width: 150px;" alt=""> </th>
              <th class="centrado-vertical">{{$item->especialidad}}</th>
              <th class="centrado-vertical" > <a href="{{route('platillos.edit', $item)}}" class="btn btn-primary"> Actualizar </a> </th>
              <th class="centrado-vertical" > <button class="btn btn-danger"  data-mdb-toggle="modal" data-mdb-target="#b{{$item->id}}">Borrar</button></th>
              <th class="centrado-vertical" > <a href="{{route('ingrediente.create', $item->id)}}" class="btn btn-success"> <i class="fa fa-plus"></i> </a>  </th>
              <th class="centrado-vertical"> <a href="{{route('extra.create', $item->id)}}" class="btn btn-secondary"> <i class="fa fa-plus-square"></i> </a>   </th>
              <th></th>
            </tr>


            <div class="modal fade" id="b{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title" id="exampleModalLabel">Borrando elemento</h5>
                    <button
                      type="button"
                      class="btn-close"
                      data-mdb-dismiss="modal"
                      aria-label="Close"
                    ></button>
                  </div>
                  <div class="modal-body text-center">
                    <h3 class="text-danger">¿Deseas borrar a {{$item->nombre}} ?</h3>
                    <img src="{{Storage::url($item->imagen1)}}"   class="img-fluid" width="150px" alt="">
                  </div>
                  <div class="modal-footer">
                    <form action="{{route('platillos.delete', $item->id )}}" method="POST">
                      @csrf @method('DELETE')
                      <button type="submit" class="btn btn-danger">Si, borrar</button>
                    </form>
                    <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                      No, cancelar
                    </button>
                  </div>
                </div>
              </div>
            </div>

         


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
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Agregar platillo normal</h5>
      <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <form action="{{route('platillos.store')}}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="form-group mb-4">
          <label for="" class="font-weight-bold">Nombre</label>
          <input type="text" class="form-control" value="conchas" name="nombre">
        </div>
        <div class="form-group">
          <label for="" class="font-weight-bold">Precio $</label>
          <input type="number" class="form-control" value="33"  name="precio">
        </div>
        <br>
        <div class="form-outline">
          <textarea class="form-control" name="descripcion" rows="4"></textarea>
          <label class="form-label" for="textAreaExample">Descripción</label>
        </div>
        <div class="form-group">
          <label for="" class="font-weight-bold">Imagenes</label>
          <input type="file" name="imagen1" class="form-control" id="">
          <br>
          <input type="file" name="imagen2" class="form-control" id="">
          <br>
          <input type="file" name="imagen3" class="form-control" id="">
          <br>
          
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