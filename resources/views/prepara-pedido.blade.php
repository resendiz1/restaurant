@extends('plantilla')
@section('contenido')
<div class="container-fluid">

    <div class="row m-3 shadow p-2 justify-content-around myborder" style="background-color: lightcoral;">
      <div class="col-12  text-center">
        <h1 class="letra text-white font-weight-bold">BROWNIES </h1>
    </div>
      <div class="col-12 text-center p-3">
        <img src="img/maenu.png" class="img-fluid logo" alt="">
      </div>

      <div class="col-lg-12 col-md-12 p-3 text-center  bg-white ">
        <h1>Ingredientes que lleva</h1>
        <form action="{{route('ingrediente')}}" method="POST">
          @csrf
        <div class="row font-weight-bold d-flex justify-content-center" id="back">
          <div class="col-auto shadow m-2 p-2 bg-primary text-white border border-primary text-center ingrediente btn-sm">
            <input type="hidden" value="Maiz frijolero del campo" name="ingrediente">
            Espinacas salteadas con sal
          </div>

          <div class="col-auto shadow m-2 p-2 bg-warning text-white border border-primary text-center ingrediente btn-sm">
            <input type="hidden" value="M2" name="ingrediente">
            Maiz frijolero del campo
          </div>

          <div class="col-auto shadow m-2 p-2 bg-warning text-white border border-primary text-center ingrediente btn-sm">Maiz fri Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos architecto blanditiis illo reprehenderit ex minus porro quo nulla quisquam temporibus ea corporis vitae, provident commodi officia sint iusto aliquam voluptatibus. jolero del campo</div>
        </div>
    
      </div>
      <div class="col-lg-12 mt-3 p-4 col-md-12 m-2 text-center bg-white">
        <h1>Agregar ingredientes extra</h1>
        <div class="row font-weight-bold d-flex justify-content-center" id="destino">
     
              <select class="js-example-basic-multiple" name="states[]" multiple="multiple">
                <option value="AL">Alabama</option>
                <option value="WY">Wyoming</option>
                <option value="WY">Wyoming</option>
                <option value="AL">Alabama</option>
                <option value="WY">Wyoming</option>
                <option value="WY">Wyoming</option>
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