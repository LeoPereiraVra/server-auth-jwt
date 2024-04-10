<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Tymon\JWTAuth\Facades\JWTAuth;

class EmpresaController extends Controller
{
    public function empresa(Request $request){
                
        $result = Empresa::where('clienteId','=',Auth::user()->pessoa_id)->get();

        return response()->json($result);

    }
}
