@extends('admin_template')
@section('Titulo','Persona')
@section('Descripcion','Ver Todo')
@section('CuerpoGeneral')
<p>La fecha actual es : {{date('Y-m-d H:i:s')}}</p>
<form action="{{URL('/persona/insertar')}}"" method="post" class="form-horizontal" id="frmInsertarPersona">
	<div class="box-body">
		<div class="row">
			<div class="col-sm-3">
				<label for="nombre" class="control-label">Nombre</label>
				<input type="text" name="nombre" id="nombre" class="form-control">			
			</div>
			<div class="col-sm-3">
				<label for="apellido" class="control-label">Apellido</label>
				<input type="text" name="apellido" id="apellido" class="form-control">
			</div>
			<div class="col-sm-3">
				<label for="dni">DNI</label>
				<input type="text" name="dni" id="dni" class="form-control">
			</div>
			<div class="col-sm-3">
				<label class="control-label">Sexo</label>
				<div>
					<label class="radio-inline"><input type="radio" name="radioSexo" value="M" >Masculino</label>
					<label class="radio-inline"><input type="radio" name="radioSexo" value="F" > Femenino</label>
				</div>		
			</div>	
		</div>
		<div class="row">
			<div class="col-sm-3">
				<label for="fechaNacimiento" class="control-label">Fecha de Nacimiento</label>
				<input type="date" name="fechaNacimiento" id="fechaNacimiento" class="form-control">			
			</div>
			<div class="col-sm-3">
				<label for="email" class="control-label">Email</label>
				<input type="text" name="email" id="email" class="form-control">
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				{{csrf_field()}}
				<input type="button" name="" value="Guardar Datos" class="btn btn-primary" style="width: :100%;" onclick="enviarFrmInsertarPersona();">				
			</div>
		</div>
		
	</div>
	
</form>
<script>
	function enviarFrmInsertarPersona()
	{
		($("#frmInsertarPersona").submit());
	}
</script>

@endsection