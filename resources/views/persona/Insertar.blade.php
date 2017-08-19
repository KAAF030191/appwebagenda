@extends ('admin_template')
@section ('titulo','Persona')
@section ('descripcionTitulo', 'Registro de Personas')
@section('cuerpoGeneral')
<form id="frmInsrtarPersona" action="{{url('persona/insertar')}}" method="post">
	<div class="row">
		<div class="col-sm-3">
			<label for="txtNombre" class="control-label">Nombre</label>
			<div>
				<input type="text" id="txtNombre" name="txtNombre" class="form-control">
			</div>
		</div>
	</div>
</form>
@endsection