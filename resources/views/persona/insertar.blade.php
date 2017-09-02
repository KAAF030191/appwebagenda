@extends('admin_template')
@section('titulo', 'Persona')
@section('descripcionTitulo', 'Registrar a una persona')
@section('cuerpoGeneral')

<form id="frmInsertarPersona" action="{{ URL('persona/insertar') }}" method="post">
	<div class="row">
		<div class="col-sm-3">
			<label for="txtNombre" class="control-label ">Nombre</label>
			<input type="text" id="txtNombre" name="txtNombre" class="form-control" >
		</div>

		<div class="col-sm-3">
			<label for="txtApellido" class="control-label ">Apellido</label>
			<input type="text" id="txtApellido" name="txtApellido" class="form-control" >
		</div>

		<div class="col-sm-3">
			<label for="txtDni" class="control-label ">Dni</label>
			<input type="text" id="txtDni" name="txtDni" class="form-control" >
		</div>

		<div class="col-sm-3">
			<label class="control-label">Sexo</label>
			<div>
				<label class="radio-inline"><input type="radio" name="radioSexo" value="m" checked="true">Masculino</label>
				<label class="radio-inline"><input type="radio" name="radioSexo" value="f">Femenino</label>				
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-3">
			<label for="txtFechaNacimiento"  class="control-label ">Fecha de Nacimiento</label>
			<div>
				<input type="date" id="txtFechaNacimiento" name="txtFechaNacimiento" class="form-control" >
			</div>
		</div>

		<div class="col-sm-3">
			<label for="txtCorreoElectronico" class="control-label ">Correo electronico</label>
			<input type="text" id="txtCorreoElectronico" name="txtCorreoElectronico" class="form-control" >
		</div>
		<div class="col-sm-6">
			<label for="" class="control-label">.</label>
			<div>
				<input type="button" class="btn btn-success btn-block" value="Registrar Persona" onclick="enviarFrmInsertarPersona()">
			</div>
		</div>
		{{ csrf_field() }}
	</div>
</form>
<script>
	function enviarFrmInsertarPersona()
	{
		$('#frmInsertarPersona').submit();
	}
</script>
@endsection