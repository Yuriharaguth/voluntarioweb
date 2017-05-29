<?php

namespace App\Http\Controllers\Institucional;

use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class InstitucionalController extends Controller
{
    public function getSobre(){
        return view('sobre'); 
    }
    
    public function getContato(){
        return view('contato');
    }
    
    public function postContato(){
        return Request::all();
    }
}
