<?php 
namespace App\Http\Controllers;

use DB;

class PersonaController extends Controller
{
		public function actionVerTodo()
	{
		$listaPersona=DB::table('tpersona')->get();
		return view('persona/vertodo', ['listaPersona' =>$listaPersona ]);
	}
}


 ?>