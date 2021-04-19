<div class="containr-fluid">
    <div class="row justify-content-center font-weight-bold  p-4 bg-success text-center text-white">
      <div class="col-6">
        <a href="{{route('platillos.create')}}" class="{{request()->routeIs('platillos.create') ? 'text-success  rounded-pill bg-white px-5' : '' }}">Platillos normales</a>
      </div>
      <div class="col-6 text-success">
        <a href="{{route('especialidades.create')}}" class="{{request()->routeIs('especialidades.create') ? 'text-success  rounded-pill bg-white px-5' : '' }}">Platillos especiales</a>
      </div>
    </div>
  </div>