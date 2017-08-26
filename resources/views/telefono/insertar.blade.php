@extends('admin_template')
@section('titulo', 'Teléfono')
@section('descripcionTitulo', 'Registro de número telefónico')
@section('cuerpoGeneral')
<form id="frmInsertarTelefono" action="{{url('telefono/insertar')}}" method="post">
	<div class="row">
		<div class="col-sm-12">
			<label class="control-label">Persona</label>
			<div>
				<input type="text" class="form-control" value="{{$tPersona->nombre.' '.$tPersona->apellido}}" readonly="readonly">
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
			<label for="txtNumero">Número telefónico</label>
			<div>
				<input type="text" id="txtNumero" name="txtNumero" class="form-control">
			</div>
		</div>
	</div>
	<div class="row" style="margin-top: 4px;">
		<div class="col-sm-12" style="text-align: right;">
			<input type="button" class="btn btn-primary" value="Registrar número telefónico" onclick="enviarFrmInsertarTelefono();">
		</div>
	</div>
	{{csrf_field()}}
	<input type="hidden" name="hdIdPersona" value="{{$tPersona->idPersona}}">
</form>
<script>
	function enviarFrmInsertarTelefono()
	{
		$('#frmInsertarTelefono').submit();
	}
</script>
@endsection