@extends('admin_template')
@section('titulo', 'Telefono')
@section('descripcionTitulo', 'Insertar nuevo telefono')
@section('cuerpoGeneral')

<form id="frmInsertarTelefono" action="{{ URL('telefono/insertar') }}" method="post">
	<div class="row">
		<div class="col-sm-12">
			<label for="txtPersona">Persona</label>
			<div>
				<input type="text" id="txtPersona" name="txtPersona" value="{{ $persona->nombre }} {{ $persona->apellido }}" class="form-control" readonly="readonly">
				<input type="hidden" id="txtidPersona" name="txtidPersona" value="{{ $persona->idPersona }}">
			</div>			
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<label for="txtOperador">Operador</label>
			<div>
				<input type="text" id="txtOperador" name="txtOperador" class="form-control">
			</div>			
		</div>
		<div class="col-sm-6">
			<label for="txtNumero">Numero</label>
			<div>
				<input type="text" id="txtNumero" name="txtNumero" class="form-control">
			</div>			
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-12">
			<input type="button" value="Guardar" class="btn btn-success btn-block" onclick="enviarFrmInsertarTelefono()">
		</div>
	</div>
	{{ csrf_field() }}
</form>
<script>
	function enviarFrmInsertarTelefono()
	{
		$('#frmInsertarTelefono').submit();
	}
</script>
@endsection