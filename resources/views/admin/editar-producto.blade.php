@extends('plantilla')

@section('contenido')
    <div class="container">
        <div class="d-flex justify-content-center row border ">
          <div class="col-8 text-center">
            <a href="{{route('platillos.create')}}">Regresar</a>
          </div>
            <div class="col-7 bg-success text-white p-3 text-center">
                <h1>Editando {{$id->nombre}}</h1>
            </div>
            <div class="col-7 p-5 shadow">
                <form action="{{route('platillo.update', $id)}}" enctype="multipart/form-data" class="m-3" method="POST">
                    @csrf @method('PATCH')
                    <div class="form-group mb-4">
                      <label for="" class="font-weight-bold">Nombre</label>
                      <input type="text" class="form-control" value="{{$id->nombre}}" name="nombre">
                    </div>
                    <div class="form-group">
                      <label for="" class="font-weight-bold">Precio $</label>
                      <input type="number" class="form-control" value="{{$id->precio}}"  name="precio">
                    </div>
                    <br>
                    <div class="form-outline">
                      <textarea class="form-control" name="descripcion" rows="4">{{$id->descripcion}}</textarea>
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
                    <div class="col-12 mt-4 text-center"> 
                    <button type="submit" class="btn btn-primary btn-block">Agregar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection