<?php

namespace App\Http\Controllers;

use DB;

class PersonaController extends Controller
{
    public function actionVerTodo()
    {
        $listapersona=DB::table('tpersona')->get();
        return view('persona/vertodo',['listapersona'=>$listapersona]);
    }
}
?>