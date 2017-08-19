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
			</tr>
		@endforeach
	</tbody>
</table>
<div class="col-sm-3">
	<div>
		<input type="button" class="btn btn-success" value="Eliminar" style="width: 100%;">
	</div>
</div>
@endsection