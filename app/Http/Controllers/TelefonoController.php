<?php
namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class TelefonoController extends Controller
{
	public function actionVerTodo()
	{
		$telefonos = DB::table('ttelefono')->get();

		return view('telefono/vertodo', [ 'telefonos' => $telefonos ]);
	}

	public function actionInsertar(Request $request , $idPersona=null)
	{
		if ($_POST)
		{			
			DB::table('ttelefono')->insert([
				'idPersona'=>$request->input('txtidPersona'),
				'operador'=>$request->input('txtOperador'),
				'numero'=>$request->input('txtNumero'),
				'created_at'=>date('Y-m-d H:i:s'),
				'updated_at'=>date('Y-m-d H:i:s')
			]);

			return redirect('telefono/vertodo');
		}

		$persona = DB::table('tpersona')->where('idPersona', '=', $idPersona)->first(); //querybuilder
		//$persona = tpersona::find($idPersona);

		return view('telefono/insertar', ['persona' => $persona]);
	}
}
?>