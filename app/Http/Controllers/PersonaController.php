<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class PersonaController extends Controller
{
	public function actionVerTodo()
	{
		$listaPersona=DB::table('tpersona')->get();//select * from tpersona;

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

			/*if($request->input('radioSexo')=='M')
			{
				$sexo=true;
			}
			else
			{
				$sexo=false;
			}*/

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

			/*insert into tpersona(nombre, apellido, dni, sexo, fechaNacimiento, correoElectronico, created_at,updated_at) values($nombre, $apellido, $dni, $sexo, $fechaNacimiento, $correoElectronico, $created_at, $updated_at)*/

			return redirect('persona/vertodo');
		}

		return view('persona/insertar');
	}

	public function actionEliminar($idPersona)
	{
		DB::table('tpersona')->where('idPersona', '=', $idPersona)->delete();//delete from tpersona where idPersona='...'

		return redirect('persona/vertodo');
	}
}
?>