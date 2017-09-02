<?php
namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
	public function actionVerTodo()
	{
		//$listaPersona = DB::table('tpersona')->get();
		//$listaPersona = DB::table('tpersona')->leftJoin('ttelefono', 'tpersona.idPersona', '=', 'ttelefono.idPersona')->get();
		//$listaPersona=DB::table('tpersona')->leftjoin('ttelefono','tPersona.idPersona','=','ttelefono.idPersona')->select('tpersona.idPersona', 'tpersona.nombre', 'ttelefono.operador')->get();
		$listaPersona = DB::table('tpersona')->get();

		foreach( $listaPersona as $key=>$value )
		{
			$value->childTelefono = DB::table('ttelefono')->where('idPersona', '=', $value->idPersona)->get();
		}

		//dd($listaPersona); exit;
		//echo $listaPersona[0]->childTelefono[1]->operador;exit;

		return view('persona/vertodo', [ 'listaPersona' => $listaPersona ]);
	}

	public function actionInsertar(Request $request)
	{
		if($_POST)
		{
			$nombre=$request->input('txtNombre');
			$apellido=$request->input('txtApellido');
			$dni=$request->input('txtDni');
			$sexo=($request->input('radioSexo') == 'm' ? true : false);
			$fechaNacimiento=$request->input('txtFechaNacimiento');
			$correoElectronico=$request->input('txtCorreoElectronico');
			$created_at = $updated_at = date('Y-m-d H:i:s');

			DB::table('tpersona')->insert([
				'nombre'=>$nombre,
				'apellido'=>$apellido,
				'dni'=>$dni,
				'sexo'=>$sexo,
				'fechaNacimiento'=>$fechaNacimiento,
				'correoElectronico'=>$correoElectronico,
				'created_at'=>$created_at,
				'updated_at'=>$updated_at
			]);

			return redirect('persona/vertodo');
		}

		return view('persona/insertar');
	}

	public function actionEliminar($idPersona)
	{
		$persona = DB::table('tpersona')->where('idPersona', '=', $idPersona)->delete();

		return redirect('persona/vertodo');
	}

	public function actionEditar(Request $request, $idPersona=null)
	{
		if ($_POST)
		{
			DB::table('tpersona')->where('idPersona', '=', $request->input('idPersona'))->update([
				'nombre'=> $request->input('txtNombre'),
				'apellido'=> $request->input('txtApellido'),
				'dni'=> $request->input('txtDni'),
				'sexo'=> ($request->input('radioSexo') == 'm' ? true : false),
				'fechaNacimiento'=> $request->input('txtFechaNacimiento'),
				'correoElectronico'=> $request->input('txtCorreoElectronico'),
				'updated_at' => date('Y-m-d H:i:s')
			]);

			return redirect('persona/vertodo');
		}

		$dPersona = DB::table('tpersona')->where('idPersona', '=', $idPersona)->first();

		return view('persona/editar', [ 'dPersona' => $dPersona]);
	}
}
?> 