<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class profilcontroller extends Controller
{
    public function index(){
        return view('pages.profil');
    }
}
