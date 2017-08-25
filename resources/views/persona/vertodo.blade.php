@extends ('admin_template')
@section ('titulo','Persona')
@section ('descripcionTitulo', 'Listado de Personas')
@section('cuerpoGeneral')
<table class="table table-striped">
	<thead>
		<th>Nombre</th>
		<th>Apellido</th>
		<th>DNI</th>
		<th>Sexo</th>
		<th>Fecha de Nacimiento</th>
		<th>Correo Electronico</th>
		<th>Fecha de Registro</th>
	</thead>
	<tbody>
		@foreach($listaPersona as $key => $value)
			<tr>
				<td>{{$value->nombre}}</td>
				<td>{{$value->apellido}}</td>
				<td>{{$value->dni}}</td>
				<td>{{($value->sexo ? 'Masculino':'Femenino')}}</td>
				<td>{{$value->fechaNacimiento}}</td>
				<td>{{$value->correoElectronico}}</td>
				<td>{{$value->created_at}}</td>
				<td>
					<input type="button" class="btn btn-sm btn-danger" value="Eliminar" onclick="eliminar({{$value->idPersona}});">
					<input type="button" class="btn btn-sm btn-info" value="Editar" onclick="editar({{$value->idPersona}});">
					<input type="button" class="btn btn-sm btn-success" value="Registrar Telefono" onclick="window.location.href='{{url('telefono/insertar')}}/{{$value->idPersona}}';">
				</td>
			</tr>
		@endforeach
	</tbody>
</table>
<script>
	function eliminar(idPersona) {
		if(confirm('Realmente desea Eliminar?'))
		{
			window.location.href='{{url('persona/eliminar')}}/'+idPersona;
		}
	}

	function editar (idPersona){
		window.location.href='{{url('persona/editar')}}/'+idPersona;
	}
	//insertando telefono
	function insertar (idPersona){
		window.location.href='{{url('telefono/insertar')}}/'+idPersona;
	}
</script>
@endsection