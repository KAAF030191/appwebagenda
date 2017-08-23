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
		<th></th>
	</thead>
	<tbody>
		@foreach($listaPersona as $key => $value)
			<tr>
				<td>{{$value->nombre}}</td>
				<td>{{$value->apellido}}</td>
				<td>{{$value->dni}}</td>
				<td>{{($value->sexo ? 'Masculino' : 'Femenino')}}</td>
				<td>{{$value->fechaNacimiento}}</td>
				<td>{{$value->correoElectronico}}</td>
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
		if(confirm('¿Realmente desea eliminar a esta persona?'))
		{
			window.location.href='{{url('persona/eliminar')}}/'+idPersona;
		}
	}

	function editar(idPersona)
	{
		window.location.href='{{url('persona/editar')}}/'+idPersona;
	}

	/*window.onload=function()
	{
		$('#btnTemporal').on('click', function()
		{
			alert('ok');
		});
	};*/
</script>
@endsection