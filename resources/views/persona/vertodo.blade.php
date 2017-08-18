@extends('admin_template')
@section('titulo', 'Persona')
@section('descripcionTitulo', 'Listado de personas')
@section('cuerpoGeneral')
<table class="table table-striped">
	<thead>
		<th>Nombre</th>
		<th>Apellido</th>
		<th>DNI</th>
		<th>Sexo</th>
		<th>Fecha de nacimiento</th>
		<th>Correo electrónico</th>
		<th>Fecha de registro</th>
	</thead>
	<tbody>
		@foreach($listaPersona as $key => $value)
			<tr>
				<td>{{$value->nombre}}</td>
				<td>{{$value->apellido}}</td>
				<td>{{$value->dni}}</td>
				<td>{{$value->sexo}}</td>
				<td>{{$value->fechaNacimiento}}</td>
				<td>{{$value->correoElectronico}}</td>
				<td>{{$value->created_at}}</td>
			</tr>
		@endforeach
	</tbody>
</table>
@endsection