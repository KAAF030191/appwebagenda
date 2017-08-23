@extends('admin_template')
@section('titulo', 'Persona')
@section('descripcionTitulo', 'Registro de persona')
@section('cuerpoGeneral')
<form id="frmEditarPersona" action="{{url('persona/editar')}}" method="post">
	<div class="row">
		<div class="col-sm-3">
			<label for="txtNombre" class="control-label">Nombre</label>
			<div>
				<input type="text" id="txtNombre" name="txtNombre" class="form-control" value="{{$tPersona->nombre}}">
			</div>
		</div>
		<div class="col-sm-3">
			<label for="txtApellido" class="control-label">Apellido</label>
			<div>
				<input type="text" id="txtApellido" name="txtApellido" class="form-control"  value="{{$tPersona->apellido}}">
			</div>
		</div>
		<div class="col-sm-3">
			<label for="txtDni" class="control-label">DNI</label>
			<div>
				<input type="text" id="txtDni" name="txtDni" class="form-control"  value="{{$tPersona->dni}}">
			</div>
		</div>
		<div class="col-sm-3">
			<label class="control-label">Sexo</label>
			<div>
				<label class="radio-inline"><input type="radio" name="radioSexo" value="M" {{($tPersona->sexo ? 'checked=true':'')}}>Masculino</label>
		<label class="radio-inline"><input type="radio" name="radioSexo" value="F" {{($tPersona->sexo ? '':'checked=true')}}>Femenino</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-3">
			<label for="dateFechaNacimiento" class="control-label">Fecha de nacimiento</label>
			<div>
				<input type="date" id="dateFechaNacimiento" name="dateFechaNacimiento" class="form-control" value="{{substr($tPersona->fechaNacimiento, 0, 10)}}">
			</div>
		</div>
		<div class="col-sm-3">
			<label for="txtCorreoElectronico" class="control-label">Correo electrónico</label>
			<div>
				<input type="text" id="txtCorreoElectronico" name="txtCorreoElectronico" class="form-control"  value="{{$tPersona->correoElectronico}}">
			</div>
		</div>
		<div class="col-sm-6">
			<label class="control-label">.</label>
			<div>
				<input type="button" class="btn btn-success" value="Editar persona" style="width: 100%;" onclick="enviarFrmEditarPersona();">
			</div>
		</div>
		{{csrf_field()}}
		<input type="hidden" id="hdIdPersona" name="hdIdPersona" value="{{$tPersona->idPersona}}">

	</div>
</form>
<script>
	function enviarFrmEditarPersona()
	{
		$('#frmEditarPersona').submit();
	}
</script>
@endsection