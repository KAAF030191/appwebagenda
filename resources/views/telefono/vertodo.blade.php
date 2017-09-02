@extends('admin_template')
@section('titulo', 'Telefono')
@section('descripcionTitulo', 'Lista de nros telefonicos')
@section('cuerpoGeneral')

<input type="button" value="Nuevo registro" class="btn btn-success" onclick="agregar()">

<table class="table table-striped table-hover">
	<thead>
		<tr>
			<td>idTelefono</td>
			<td>Persona</td>
			<td>Operador</td>
			<td>Numero</td>
			<td></td>
		</tr>
	</thead>
	<tbody>
		@foreach( $telefonos as $key=>$value )
		<tr>
			<td>{{ $value->idTelefono }}</td>
			<td>{{ $value->idPersona }}</td>
			<td>{{ $value->operador }}</td>
			<td>{{ $value->numero }}</td>
		</tr>
		@endforeach
	</tbody>
	
</table>
<script>
	function agregar()
	{
		window.location.href = '{{ URL('telefono/registrar') }}';
	} 
</script>
@endsection