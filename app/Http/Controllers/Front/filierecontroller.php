<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class filierecontroller extends Controller
{
    public function index(){
        return view ('pages.filiere');
    }
}
