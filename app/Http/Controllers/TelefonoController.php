<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TelefonoController extends Controller
{
	public function actionInsertar(Request $request, $idPersona=null)
	{
		if($_POST)
		{
			DB::table('ttelefono')->insert([
				'idPersona' => $request->input('hdIdPersona'),
				'operador' => $request->input('txtOperador'),
				'numero' => $request->input('txtNumero'),
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s')
			]);

			return redirect('persona/vertodo');
		}

		$tPersona=DB::table('tpersona')->where('idPersona', $idPersona)->first();//select * from tpersona where idPersona='...' limit 1

		return view('telefono/insertar', ['tPersona' => $tPersona]);
	}
}
?>