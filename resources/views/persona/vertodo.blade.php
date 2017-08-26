@extends('admin_template')
@section('titulo','Persona')
@section('descripcionTitulo','Listado de Personas')

@section('cuerpoGeneral')

<table class="table table-striped">
	<thead>
		<th>Nombre</th>
		<th>Apellido</th>
		<th>DNI</th>
		<th>Sexo</th>
		<th>Fecha de nacimiento</th>
		<th>Correo electrónico</th>
		<th>Operador</th>
		<th>Numero</th>
		<th>Fecha de registro</th>
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
				<td>{{$value->operador}}</td>
				<td>{{$value->numero}}</td>
				<td>{{$value->created_at}}</td>
				<td>
					<input type="button" class="btn btn-sm btn-danger" value="Eliminar" onclick="eliminar({{$value->idPersona}});">
				</td>
				<td>
					<input type="button" class="btn btn-sm btn-success" value="Editar" onclick="editar({{$value->idPersona}});">
				</td>
				<td>
					<input type="button" class="btn btn-sm btn-info" value="Agregar numero" onclick="window.location.href='{{url('telefono/insertar')}}/{{$value->idPersona}};">
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
	/*window.onload=function()
	{
		$('#btnTemporal').on('click', function()
		{
			alert('ok');
		});
	};*/


function editar(idPersona)
	{
		
			window.location.href='{{url('persona/editar')}}/'+idPersona;
	}



</script>

@foreach($listaPersona as $key => $value)
<div><b>{{$value->nombre}}</b></div>
@endforeach
<b>la fecha actual es: {{date('Y-m-d H:i:s')}}</b>
@endsection


