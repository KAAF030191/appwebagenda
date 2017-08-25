<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;

class TelefonoController extends Controller
	{
	public function actionInsertar($idPersona)
		{
			$tPersona=DB::table('tPersona')->where('idPersona',$idPersona)->first();//select * from tPersona where idpersona =1 
			dd($tPersona);exit;

			return view ('telefono/insertar',['tPersona'=>$tPersona]);
		}
	}
?>