<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;

class TelefonoController extends Controller
	{
	public function actionInsertar(Request $request, $idPersona=null) //fachada request
		{
			if($_POST){
							
				DB::table('ttelefono')->insert([
				'idPersona' => $request->input('hdIdPersona'),
				'operador' => $request->input('txtOperador'),
				'numero'=>$request->input('txtNumero'),
				'created_at'=> date('Y-m-d H:I:s'),
				'updated_at'=> date('Y-m-d H:I:s')
				]);
				return redirect('persona/vertodo');
			}
			$tPersona=DB::table('tPersona')->where('idPersona',$idPersona)->first();//select * from tPersona where idpersona =idPersona='...' limit 1
			//dd($tPersona);exit;

			return view ('telefono/insertar',['tPersona'=>$tPersona]);
		}
	}
?>