@extends('layout')
@section('content')
<h1>Todos los usuarios</h1>
<table width="100%" border="1">
<thead>
<tr>
<th>ID</th>
<th>Nombres</th>
<th>Apellidos</th>
<th>Acciones</th>
</tr>
</thead>
<tbody>
@foreach ($users as $usuario)
<tr>
<td>{{$usuario->id}}</td>
<td><a href="{{route('usuarios.show', $usuario->id)}}">{{$usuario->nombre}} </a></td>
<td>{{$usuario->apellido}}</td>
<td><a href="{{route('usuarios.edit', $usuario->id)}}"> Editar</a>
<form style="display: inline;" action="{{route('usuarios.destroy',  $usuario->id )}}" method="POST">
{!! method_field('DELETE')!!}
{!! csrf_field()!!}
<button type="submit">Eliminar</button></form>
</td>
</tr>
@endforeach
</tbody>
</table>
@endsection