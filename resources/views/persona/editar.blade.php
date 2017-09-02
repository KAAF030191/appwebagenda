@extends('admin_template')
@section('titulo', 'Persona')
@section('descripcionTitulo', 'Registrar a una persona')
@section('cuerpoGeneral')

<form id="frmEditarPersona" action="{{ URL('persona/editar') }}" method="post">
	<div class="row">
		<div class="col-sm-3">
			<label for="txtNombre" class="control-label ">Nombre</label>
			<input type="text" id="txtNombre" name="txtNombre" class="form-control" value="{{ $dPersona->nombre }}">
		</div>

		<div class="col-sm-3">
			<label for="txtApellido" class="control-label ">Apellido</label>
			<input type="text" id="txtApellido" name="txtApellido" class="form-control" value="{{ $dPersona->apellido }}" >
		</div>

		<div class="col-sm-3">
			<label for="txtDni" class="control-label ">Dni</label>
			<input type="text" id="txtDni" name="txtDni" class="form-control" value="{{ $dPersona->dni }}">
		</div>

		<div class="col-sm-3">
			<label class="control-label">Sexo</label>
			<div>
				<label class="radio-inline"><input type="radio" name="radioSexo" value="m" {{($dPersona->sexo ?  'checked=true' : '') }}>Masculino</label>
				<label class="radio-inline"><input type="radio" name="radioSexo" value="f" {{($dPersona->sexo ? '' : 'checked=true') }}>Femenino</label>				
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-3">
			<label for="txtFechaNacimiento"  class="control-label ">Fecha de Nacimiento</label>
			<div>
				<input type="date" id="txtFechaNacimiento" name="txtFechaNacimiento" class="form-control" value="{{substr($dPersona->fechaNacimiento, 0, 10)}}">
			</div>
		</div>

		<div class="col-sm-3">
			<label for="txtCorreoElectronico" class="control-label ">Correo electronico</label>
			<input type="text" id="txtCorreoElectronico" name="txtCorreoElectronico" class="form-control" value="{{ $dPersona->correoElectronico }}">
		</div>
		<div class="col-sm-6">
			<label for="" class="control-label">.</label>
			<div>
				<input type="button" class="btn btn-success btn-block" value="Editar Persona" onclick="enviarFrmEditarPersona()">
			</div>
		</div>
		{{ csrf_field() }}
		<input type="hidden" id="idPersona" name="idPersona" value="{{ $dPersona->idPersona }}">
	</div>
</form>
<script>
	function enviarFrmEditarPersona()
	{
		$('#frmEditarPersona').submit();
	}
</script>
@endsection