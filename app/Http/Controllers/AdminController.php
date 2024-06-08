<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
  public function dashboard()
  {
    return view('admin.dashboard');
  }
  public function getCommunes()
  {

    $communes = User::where("commune", "true")->get();
    return view("admin.pages.communes")->with("communes",$communes);
  }
}
