@extends('admin_template')
@section('titulo', 'Persona')
@section('descripciontitulo','listado de personas') 
@section('cuerpogeneral')
<b style="color:red"><h1><center><i> vista desde el controlador </i></center></h1></b>
<br>
<br>
@foreach($listaPersona as $key => $value)
	<div><b>{{$value->nombre}}</b></div>

@endforeach
@endsection 