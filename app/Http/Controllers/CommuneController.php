<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommuneController extends Controller
{
    public function dashboard(){
        return view('commune.dashboard');
      }
}
