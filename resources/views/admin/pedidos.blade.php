@extends('plantilla')

@section('contenido')
<div class="container-fluid p-5  bg-success">
    <div class="row bg-white">
        <div class="col-12 text-center">
            <h1>Pedidos pendientes</h1>
        </div>
    </div>
  <div class="row p-5 bg-white justify-content-around">
        <div class="col-4 shadow p-3">
            <h4>Nombre del platillo</h4>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem itaque perferendis ratione quia nemo accusantium atque magnam laboriosam placeat cumque et culpa ipsum, eos accusamus reiciendis exercitationem suscipit sint sed!</p>
            <button class="btn  btn-success btn-block" data-mdb-toggle="modal" data-mdb-target="#detalles">
                <i class="fa fa-eye"></i> Ver detalles del pedido
            </button>
            <span class="badge bg-primary text-center mt-3">Tiempo de haberse realizado: hace 10 min</span>
        </div>
</div>
</div>





<!-- Modal del detalle de los pedidos -->
<div class="modal fade" id="detalles" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Agregando ingrediente</h5>
      <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
       <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-12 text-center">
                <img src="img/2.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-12 mt-4">
                <table class="table table-striped border table-hover">
                    <thead>
                        <tr>
                            <th class="text-success">Ingredientes que lleva</th>
                            <th class="text-danger">Ingredientes dedcartados</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>ingrediente 1</th>
                            <th>ingrediente 12</th>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-12 text-center">
                <small class="font-weight-bold">
                    Direccion: 16 norte, entre calle ta y tal #1002 <br> Tél: 2491145233
                </small>
            </div>
        </div>
    </div>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-primary" >
        El pedido ya va en camino
      </button>
      <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Cancelar</button>
    </div>
  </div>
</div>
</div>    
@endsection