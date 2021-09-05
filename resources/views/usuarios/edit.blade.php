@extends('layout')
@section('content')
    
<form class="mt-5" action="{{route('usuarios.update', $usuario->id)}}" method="POST">
{!! method_field('PUT')!!}
{!! csrf_field()!!}
  <div class="form-row">
    <div class="col">
      <input type="text" class="form-control"  name="nombre" placeholder="Nombres" required/ value="{{$usuario->nombre}}">
    </div>
    <div class="col">
      <input type="text" class="form-control"  name="apellido" placeholder="Apellidos" required/ value="{{$usuario->apellido}}">
    </div>
  </div>
  <button type="submit" class="container btn btn-primary mt-5">Enviar</button>
  
</form>

   
@endsection