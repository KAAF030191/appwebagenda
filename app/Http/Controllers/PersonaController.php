<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class PersonaController extends Controller
{
	public function actionVerTodo()
	{
		$listaPersona=DB::table('tpersona')->get();
		return view('persona/vertodo', ['listaPersona' => $listaPersona]);
	}

	public function actionInsertar(Request $request)
	{
		if($_POST)
		{
			$nombre=$request->input('txtNombre');
			$apellido=$request->input('txtApellido');
			$dni=$request->input('txtDni');
			$sexo=($request->input('radioSexo')=='M' ? true : false);
			$fechaNacimiento=$request->input('dateFechaNacimiento');
			$correoElectronico=$request->input('txtCorreoElectronico');
			$created_at=$updated_at=date('Y-m-d H:i:s');
			DB::table('tpersona')->insert([
				'nombre' => $nombre,
				'apellido' => $apellido,
				'dni' => $dni,
				'sexo' => $sexo,
				'fechaNacimiento' => $fechaNacimiento,
				'correoElectronico' => $correoElectronico,
				'created_at' => $created_at,
				'updated_at' => $updated_at
			]);
			
			return redirect('persona/vertodo');
		}

		return view('persona/insertar');
	}




	public function actionEliminar($idPersona)
	{
			DB::table('tpersona')->where ('idPersona','=',$idPersona)->delete();

		return redirect('persona/vertodo');
	}

	public function actionEditar($idPersona=null)
	{
			if ($_POST) 
			{
				
			}

			else
			{

				$tPersona=DB::table('tpersona')->where('idPersona','=',$idPersona)->first();
					return view('persona/editar',['tPersona'=>$tPersona]);
			}


		return redirect('persona/vertodo');
	}





}

?>