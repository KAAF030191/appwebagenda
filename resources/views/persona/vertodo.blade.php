@extends('admin_template')
@section('titulo','persona')
@section('descripcionTitulo','Listado de personas')
@section('cuerpogeneral')
    <table class="table table-striped">
        <thead>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>DNI</th>
        <th>Sexo</th>
        <th>Fecha de nacimiento</th>
        <th>Correo electrónico</th>
        <th>Fecha de registro</th>
        </thead>
        <tbody>
@foreach($listapersona as $key =>$value)
    <tr>
        <td>{{$value->nombre}}</td>
        <td>{{$value->apellido}}</td>
        <td>{{$value->DNI}}</td>
        <td>{{($value->sexo ? 'Masculino' : 'Femenino')}}</td>
        <td>{{$value->fecha_Nacimiento}}</td>
        <td>{{$value->Correo_Electronico}}</td>
        <td>{{$value->created_at}}</td>
    </tr>
@endforeach
        </tbody>
    </table>
@endsection