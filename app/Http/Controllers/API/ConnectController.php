<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\Action;

class ConnectController extends Controller
{
    public function index(){
        Action::create([
            'libele'=>'ajouter',
            'code'=>'ADD',
            'position'=>1,
            'icon'=>'fa fa-user', 
            'statut'=>1,
            

        ]);
        return response()->json([
            'result'=>'succes'
        ]);
    }
}
