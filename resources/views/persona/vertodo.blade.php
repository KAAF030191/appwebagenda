@extends('admin_template')
@section('titulo', 'Persona')
@section('descripcionTitulo', 'Listado de personas')
@section('cuerpoGeneral')
<table class="table table-striped">
    <thead>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>DNI</th>
        <th>Sexo</th>
        <th>Fecha de nacimiento</th>
        <th>Correo electrónico</th>
        <th>Teléfono</th>
        <th>Fecha de registro</th>
        <th></th>
    </thead>
    <tbody>
        @foreach($listaPersona as $key => $value)
            <tr>
                <td>{{$value->nombre}}</td>
                <td>{{$value->apellido}}</td>
                <td>{{$value->DNI}}</td>
                <td>{{($value->sexo ? 'Masculino' : 'Femenino')}}</td>
                <td>{{$value->fecha_Nacimiento}}</td>
                <td>{{$value->Correo_Electronico}}</td>
                <td>
                    @foreach($value->childTelefono as $index => $item)
                        <b>{{$item->operador}}(<a href="#">Editar</a> | <a href="#">Eliminar</a>): </b> {{$item->numero}}
                        <br>
                    @endforeach
                </td>
                <td>{{$value->created_at}}</td>
                <td>
                    <input type="button" class="btn btn-sm btn-danger" value="Eliminar" onclick="eliminar({{$value->idpersona}});">
                    <input type="button" class="btn btn-sm btn-info" value="Editar" onclick="editar({{$value->idpersona}});">
                    <input type="button" class="btn btn-sm btn-success" value="Registrar teléfono" onclick="window.location.href='{{url('telefono/insertar')}}/{{$value->idpersona}}';">
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<script>
    function eliminar(idPersona)
    {
        if(confirm('¿Realmente desea eliminar a esta persona?'))
        {
            window.location.href='{{url('persona/eliminar')}}/'+idpersona;
        }
    }
    function editar(idPersona)
    {
        window.location.href='{{url('persona/editar')}}/'+idpersona;
    }
    /*window.onload=function()
    {
        $('#btnTemporal').on('click', function()
        {
            alert('ok');
        });
    };*/
</script>
@endsection