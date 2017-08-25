<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TelefonoController extends Controller
{
	public function actionInsertar($idPersona)
	{
		$tPersona=DB::table('tpersona')->where('idPersona', $idPersona)->first();//select * from tpersona where idPersona='...' limit 1

		return view('telefono/insertar', ['tPersona' => $tPersona]);
	}
}
?>