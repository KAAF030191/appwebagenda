@extends('admin_template')
@section('titulo', 'Persona')
@section('descripcionTitulo', 'Listado de personas')
@section('cuerpoGeneral')
<b> Esta es la vista ver todo </b>
<b>La fecha actual es {{ date('Y-m-d H:i:s') }} </b>

<table class="table table-striped table-hover">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Dni</th>
			<th>Sexo</th>
			<th>Fecha de Nacimiento</th>
			<th>Correo Electronico</th>
			<th>Telefono</th>
			<th>Fecha Registro</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		@foreach( $listaPersona as $key => $value)
			<tr>
				<td>{{ $value->nombre }}</td>
				<td>{{ $value->apellido }}</td>
				<td>{{ $value->dni }}</td>
				<td>{{ ($value->sexo ? 'Masculino' : 'Femenino') }}</td>
				<td>{{ $value->fechaNacimiento }}</td>
				<td>{{ $value->correoElectronico }}</td>
				<td>
					@foreach($value->childTelefono as $index => $item)
						<b>{{$item->operador}}(<a href="#">Editar</a> | <a href="#">Eliminar</a>): </b> {{$item->numero}}
						<br>
					@endforeach
				</td>
				<td>{{ $value->created_at }}</td>
				<td>
					<input type="button" class="btn btn-danger btn-sm" value="Eliminar" onclick="eliminar({{ $value->idPersona }});">
					<input type="button" class="btn btn-info btn-sm" value="Editar" onclick="editar({{ $value->idPersona }});" >
					<input type="button" class="btn btn-success btn-sm" value="Registrar Telefono" 	onclick="window.location.href='{{ URL('telefono/insertar') }}/{{ $value->idPersona }}';" >
				</td>
			</tr>
		@endforeach	
	</tbody>
</table>

<script>
	function eliminar(idPersona)
	{
		if (confirm('¿Realmente desea eliminar a esta persona?'))
		{
			window.location.href='{{ URL('persona/eliminar') }}/'+idPersona;
		}
	}

	function editar(idPersona)
	{
		window.location.href = '{{ URL('persona/editar') }}/' + idPersona;
	}

</script>

@endsection