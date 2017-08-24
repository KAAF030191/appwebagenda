@extends('admin_template')
@section('titulo', 'Persona')
@section('descripcionTitulo','listado de personas')
@section('cuerpoGeneral')
<table class="table table-striped">
	<thead>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>DNI</th>
			<th>sexo</th>
			<th>Fecha de Nacimiento</th>
			<th>Correo eletronico</th>
			<th>fecha de registro</th>
			<th></th>


	</thead>
	<tbody>
			@foreach($listaPersona as $key => $value)
				<tr>
					<td>{{$value->nombre}}</td>
					<td>{{$value->apellido}}</td>
					<td>{{$value->dni}}</td>
					<td>{{($value->sexo ? 'Masculino' : 'Femenino')}}</td>
					<td>{{$value->fechanacimiento}}</td>
					<td>{{$value->correoelectronico}}</td>
					<td>{{$value->created_at}}</td>
					<td>
						<input type="button" class="btn btn-sm btn-danger" value="Eliminar" onclick="eliminar({{$value->idPersona}});">
						<input type="button" class="btn btn-sm btn-info" value="Editar" onclick="editar({{$value->idPersona}});">

					</td>				

				</tr>
				@endforeach
	</tbody>
</table>
<script>

	function eliminar(idPersona)
	{
		if (confirm('¿realmente desea eliminar a esta persona?'))
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