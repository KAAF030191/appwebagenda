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
				<th><input type="button" class="btn btn-sm btn-danger" value="Eliminar" onclick="eliminar({{$value->idPersona}});"></th>
				<th><input type="button" class="btn btn-sm btn-info" value="Editar" onclick="editar({{$value->idPersona}});"></th>

			</tr>
			@endforeach
		</tbody>
	</table>
<script>
	function eliminar(idPersona)
	{
		if(confirm('¿Realmente desea eliminar a esta persona?'))
		{
			window.location.href='{{url('persona/eliminar')}}/'+idPersona;
		}
	}

	function editar(idPersona)
	{
		window.location.href='{{url('persona/editar')}}/'+idPersona;


	}

</script>
@endsection 