@extends ('admin_template')
@section ('titulo','Persona')
@section ('descripcionTitulo', 'Registro de Personas')
@section('cuerpoGeneral')
<form id="frmInsertarPersona" action="{{url('persona/insertar')}}" method="post">
	<div class="row">
		<div class="col-sm-3">
			<label for="txtNombre" class="control-label">Nombre</label>
			<div>
				<input type="text" id="txtNombre" name="txtNombre" class="form-control">
			</div>
		</div>
		<div class="col-sm-3">
			<label for="txtApellido" class="control-label">Apellido</label>
			<div>
				<input type="text" id="txtApellido" name="txtApellido" class="form-control">
			</div>
		</div>
		<div class="col-sm-3">
			<label for="txtDni" class="control-label">DNI</label>
			<div>
				<input type="text" id="txtDni" name="txtDni" class="form-control">
			</div>
		</div>
		<div class="col-sm-3">
			<label class="control-label">Sexo</label>
			<div>
				<label class="radio-inline"><input type="radio" name="radioSexo" checked="true" value="M">Masculino</label>
				<label class="radio-inline"><input type="radio" name="radioSexo" value="F">Femenino</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-3">
			<label for="dateFechaNacimiento" class="control-label">Fecha de nacimiento</label>
			<div>
				<input type="date" id="dateFechaNacimiento" name="dateFechaNacimiento" class="form-control">
			</div>
		</div>
		<div class="col-sm-3">
			<label for="txtCorreoElectronico" class="control-label">Correo electrónico</label>
			<div>
				<input type="text" id="txtCorreoElectronico" name="txtCorreoElectronico" class="form-control">
			</div>
		</div>
		<div class="col-sm-6">
			<label class="control-label">.</label>
			<div>
				<input type="button" class="btn btn-success" value="Registrar persona" style="width: 100%;" onclick="enviarFrmInsertarPersona()">
			</div>
		</div>
		{{csrf_field()}}
	</div>
</form>
<script>
	function enviarFrmInsertarPersona()
	{
		$('#frmInsertarPersona').submit();
	}
</script>
@endsection