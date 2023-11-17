<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\Action;

class ConnectController extends Controller
{
    public function index(Request $request){
       
        Action::create([
            'libele'=>$request->libelle,
            'code'=>$request->code,
            'position'=>$request->position,
            'icon'=>$request->icon, 
            'statut'=>intval($request->statut),
            

        ]);
        return response()->json([
            'result'=>'succes'
        ]);
    }
}
