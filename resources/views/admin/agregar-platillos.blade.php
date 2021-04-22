@extends('plantilla')
@include('admin.nav')


@section('contenido')
<div class="container mt-5">
    <div class="row mt-5">
      <div class="col-lg-3 col-md-12 col-sm-12 mb-3">
        <button class="btn btn-success"  data-mdb-toggle="modal" data-mdb-target="#exampleModal"> <i class="fa fa-plus"></i> Agregar a platillos normales</button>
      </div>
      <div class="col-12">
        <table class="table table-striped  table_wrapper text-center">
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
            <tr>
              <th class="centrado-vertical">Platillo uno</th>
              <th class="centrado-vertical" >$200</th>
              <th class="centrado-vertical" > <img src="img/1.jpg" class="img-fluid" style="width: 300px;" alt=""> </th>
              <th class="centrado-vertical" > <button class="btn btn-primary"> Actualizar </button> </th>
              <th class="centrado-vertical" > <button class="btn btn-danger">Borrar</button> </th>
              <th class="centrado-vertical" >  <button class="btn btn-success"> Agregar ingredientes </button> </th>
            </tr>
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
      <form action="{{route('platillos.store')}}" method="POST">
        @csrf
        <div class="form-group">
          <label for="">Nombre</label>
          <input type="text" class="form-control" name="nombre">
        </div>
        <div class="form-group">
          <label for="">Precio $</label>
          <input type="text" class="form-control" name="precio">
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