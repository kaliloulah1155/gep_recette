<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class semestrecontroller extends Controller
{
    public function index(){
        return view('pages.semestre');
    }
}
