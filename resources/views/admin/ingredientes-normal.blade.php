
@extends('plantilla')

@section('contenido')


<div class="container mt-5">
    <div class="row mt-5 justify-content-center ">
        <div class="col-6 text-center">
            @if (session('agregado'))
                {!! session('agregado')  !!}
                
            @endif
        </div>
        <div class="col-7 bg-success text-center">
            <a href="{{route('platillos.create')}}" class="text-white link">Regresar</a>
            <h3 class="text-white p-3">Agregando ingrediente extra</h3>
        </div>
        <div class="col-7  p-5 shadow-1-strong">
                <form action="{{route('ingrediente.store')}}" method="POST" class="px-5">
                    @csrf
                    <div class="form-group px-5">
                        <label for="">Nombre</label>
                        <input type="text" value="{{old('nombre')}}" class="form-control {{$errors->first('nombre') ? 'is-invalid' : '' }}" name="nombre">
                        {!!$errors->first('nombre', '<div class="alert-alert-sm alert-danger font-weight-bold">:message</div>')!!}
                        <br>
                                            
                        <input type="hidden" name="id_platillo" value="{{$id}}">
                    </div>

                    <div class="form-group px-5 mt-2">
                        <button class="btn btn-success btn-block">Agregar</button>
                    </div>
                </form>
        </div>
    </div>
</div>
    
@endsection