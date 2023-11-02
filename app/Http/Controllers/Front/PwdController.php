<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PwdController extends Controller
{
    public function index(){
        // elle pointe sur la page de mot de passe oubliés 
        return view('pages.mdpoublie');
    }
    public function index1(){
        // elle pointe sur la page de nouveau mot de passe 
        return view('pages.new_mdp');
    }
}
