<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Tymon\JWTAuth\Facades\JWTAuth;

class EmpresaInfoController extends Controller
{
    public function usuario_empresa(Request $request){
        
        $result = DB::table('usuario_empresa')->where('pessoa_id','=',Auth::user()->pessoa_id)->get();

        return response()->json($result);

    }
}
