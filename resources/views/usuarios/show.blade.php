@extends('layout')
@section('content')
    

<h1>Mi nombre es: {{$usuario->nombre}} {{$usuario->apellido}}</h1>


<h5>Mi id es:  {{$usuario->id}} </h5>

   
@endsection