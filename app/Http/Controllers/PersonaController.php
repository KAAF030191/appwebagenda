<?php
namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class PersonaController extends Controller
{
	
	public function actionVerTodo()
	{
		$listaPersona=DB::table('tpersona')->get();
		return view('persona/vertodo',['listaPersona'=>$listaPersona]);
	}
	public function actionInsertar(Request $request)
	{
		if($_POST)
		{
			$nombre = $request->input('nombre');
			$apellido = $request->input('apellido');
			$dni = $request->input('dni');
			$sexo = ($request->input('radioSexo')=="M"? true : false);
			$fechaNacimiento = $request->input('fechaNacimiento');
			$correoElectronico = $request->input('email');
			$created_at =  $updated_at = date('Y-m-d H:i:s');
			DB::table('tpersona')->insert([
				'nombre' => $nombre,
				'apellido' => $apellido,
				'dni' => $dni,
				'sexo' => $sexo,
				'fechaNacimiento' => $fechaNacimiento,
				'correoElectronico' => $correoElectronico,
				'created_at' => $created_at,
				'updated_at' => $created_at
			]);
			return redirect('persona/vertodo');

		}
		return view('persona/insertar');
	}
	public function actionEliminar($idPersona)
	{
		DB::table('tpersona')->where('idPersona','=',$idPersona)->delete();
		return redirect('/persona/vertodo');
	}
	public function actionEditar(Request $request, $idPersona=null)
	{
		if($_POST)
		{
			$nombre = $request->input('nombre');
			$apellido = $request->input('apellido');
			$dni = $request->input('dni');
			$sexo = ($request->input('radioSexo')=="M"? true : false);
			$fechaNacimiento = $request->input('fechaNacimiento');
			$correoElectronico = $request->input('email');
		    $updated_at = date('Y-m-d H:i:s');

			DB::table('tpersona')->where('idPersona','=',$request->input('hdIdPersona'))->update([
				'nombre' => $nombre,
				'apellido' => $apellido,
				'dni' => $dni,
				'sexo' => $sexo,
				'fechaNacimiento' => $fechaNacimiento,
				'correoElectronico' => $correoElectronico,
				'updated_at' => $updated_at
				]);
			return redirect('persona/vertodo');

		}

		$persona = DB::table('tpersona')->where('idPersona','=',$idPersona)->first();

		return view('persona/editar',['persona' => $persona]);
	}
}