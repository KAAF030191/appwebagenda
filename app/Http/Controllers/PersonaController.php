<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Model\TPersona;

class PersonaController extends Controller
{
	public function actionVerTodo()
	{
		//$listaPersona=DB::table('tpersona')->get();//select * from tpersona;
		//$listaPersona=DB::table('tpersona')->leftJoin('ttelefono', 'tpersona.idPersona', '=', 'ttelefono.idPersona')->get();//select * from tpersona as tp inner join ttelefono as tt on tp.idPersona=tt.idPersona;
		
		/*$listaPersona=DB::table('tpersona')->get();

		foreach($listaPersona as $key => $value)
		{
			$value->childTelefono=DB::table('ttelefono')->where('idPersona', $value->idPersona)->get();
		}*/

		$listaPersona=TPersona::with(['ttelefono'])->get();

		//dd($listaPersona);
		//echo $listaPersona[1]->nombre;
		//echo $listaPersona[1]->childTelefono[0]->operador;exit;

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

			$temp=DB::table('tpersona')->where('dni', $dni)->first();

			if($temp!=null)
			{
				return redirect('persona/vertodo');
			}

			/*DB::table('tpersona')->insert([
				'nombre' => $nombre,
				'apellido' => $apellido,
				'dni' => $dni,
				'sexo' => $sexo,
				'fechaNacimiento' => $fechaNacimiento,
				'correoElectronico' => $correoElectronico,
				'created_at' => $created_at,
				'updated_at' => $updated_at
			]);*/

			$tPersona=new TPersona();

			$tPersona->nombre=$nombre;
			$tPersona->apellido=$apellido;
			$tPersona->dni=$dni;
			$tPersona->sexo=$sexo;
			$tPersona->fechaNacimiento=$fechaNacimiento;
			$tPersona->correoElectronico=$correoElectronico;

			$tPersona->save();

			/*insert into tpersona(nombre, apellido, dni, sexo, fechaNacimiento, correoElectronico, created_at,updated_at) values($nombre, $apellido, $dni, $sexo, $fechaNacimiento, $correoElectronico, $created_at, $updated_at)*/

			return redirect('persona/vertodo');
		}

		return view('persona/insertar');
	}

	public function actionEliminar($idPersona)
	{
		//DB::table('tpersona')->where('idPersona', '=', $idPersona)->delete();//delete from tpersona where idPersona='...'

		TPersona::find($idPersona)->delete();

		return redirect('persona/vertodo');
	}

	public function actionEditar(Request $request, $idPersona=null)
	{
		if($_POST)
		{
			/*DB::table('tpersona')->where('idPersona', '=', $request->input('hdIdPersona'))->update([
				'nombre' => $request->input('txtNombre'),
				'apellido' => $request->input('txtApellido'),
				'dni' => $request->input('txtDni'),
				'sexo' => ($request->input('radioSexo')=='M' ? true : false),
				'fechaNacimiento' => $request->input('dateFechaNacimiento'),
				'correoElectronico' => $request->input('txtCorreoElectronico'),
				'updated_at' => date('Y-m-d H:i:s')
			]);*/

			$tPersona=TPersona::find($request->input('hdIdPersona'));

			$tPersona->nombre=$request->input('txtNombre');
			$tPersona->apellido=$request->input('txtApellido');
			$tPersona->dni=$request->input('txtDni');
			$tPersona->sexo=($request->input('radioSexo')=='M' ? true : false);
			$tPersona->fechaNacimiento=$request->input('dateFechaNacimiento');
			$tPersona->correoElectronico=$request->input('txtCorreoElectronico');

			$tPersona->save();

			return redirect('persona/vertodo');
		}

		//$tPersona=DB::table('tpersona')->where('idPersona', '=', $idPersona)->first();//select * from tpersona where idPersona='...'
		$tPersona=TPersona::find($idPersona);

		return view('persona/editar', ['tPersona' => $tPersona]);
	}
}
?>