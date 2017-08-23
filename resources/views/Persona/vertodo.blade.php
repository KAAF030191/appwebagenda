@extends('admin_template')
@section('Titulo','Persona')
@section('Descripcion','Ver Todo')
@section('CuerpoGeneral')
<h2>Hola</h2>
<p>La fecha actual es : {{date('Y-m-d H:i:s')}}</p>
<table class="table table-striped">
    <thead>
		<th>Nombre</th>
		<th>Apellido</th>
		<th>DNI</th>
		<th>Sexo</th>
		<th>Fecha de nacimiento</th>
		<th>Correo electrónico</th>
		<th>Fecha de registro</th>
		<th colspan="2">Acciones</th>
	</thead>
	<tbody>
		@foreach($listaPersona as $key => $value)
			<tr>
				<td>{{$value->nombre}}</td>
				<td>{{$value->apellido}}</td>
				<td>{{$value->dni}}</td>
				<td>{{ ($value->sexo ? 'Masculino' : 'Femenino') }}</td>
				<td>{{$value->fechaNacimiento}}</td>
				<td>{{$value->correoElectronico}}</td>
				<td>{{$value->created_at}}</td>
				<td><input type="button" value="Eliminar" class="btn btn-danger" onclick="eliminarPersona({{$value->idPersona}});" ></td>
				<td><input type="button" value="Editar" class="btn btn-success" onclick="editarPersona({{$value->idPersona}});"></td>
			</tr>
		@endforeach
	</tbody>
  </table>
@endsection

<script>
	function eliminarPersona(idPersona)
	{
		if(confirm('Realmente desea eliminar este registro'))
		{
			window.location.href = '{{url('persona/eliminar')}}/'+idPersona;
		}
	}
	function editarPersona(idPersona)
	{
		window.location.href = '{{url('persona/editar')}}/'+idPersona;
	}
</script>