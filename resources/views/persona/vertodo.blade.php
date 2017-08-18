@extends('admin_template')
@section('titulo', 'Persona')
@section('descripciontitulo','listado de personas') 
@section('cuerpogeneral')
<b style="color:red"><h1><center><i> vista desde el controlador </i></center></h1></b>


	<table class="table table-striped"> 
		<thead>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>DNI</th>
			<th>sexo</th>
			<th>fecha de nacimiento</th>
			<th>Correo electronico </th>
			<th>fecha de registro</th>
		</thead>
		<tbody>
			@foreach($listaPersona as $key => $value)
			<tr>
				<td>{{$value->nombre}}</td>
				<td>{{$value->apellido}}</td>
				<td>{{$value->dni}}</td>
				<td>{{($value->sexo ? 'masculino' : 'femenino')}}</td>
				<td>{{$value->fechanacimiento}}</td>
				<td>{{$value->correoelectronico}}</td>
				<td>{{$value->created_at}}</td>

			</tr>
			@endforeach
		</tbody>
	</table>
	


@endsection 