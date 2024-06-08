<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CommuneController extends Controller
{
  public function dashboard()
  {
    return view('commune.dashboard');
  }
  public function ajouterCommune()
  {
    return view("admin.pages.ajouterCommune");
  }
  public function storeCommune(Request $request)
  {
    User::create([
      'name' => $request->name,
      'email' => $request->email,
      'password' => Hash::make($request->password),
      "commune" => "true",
      'role' => 'commune',
    ]);

    // Redirect with a success message
    return redirect()->route('admin.pages.ajouterCommune')->with('success', 'Commune added successfully!');
  }

  public function getReports()
  {
    $reports = Report::get();
    return view("commune.pages.reports")->with("reports", $reports);
  }
  public function getPublicCommunes()
  {

    $communes = User::where("commune", "true")->get();
    return view("pages.commune")->with("communes", $communes);
  }
  public function getOneCommuneWithReport($id)
  {
    $commune = User::with('reports')->where("id", $id);
    dd($commune);
    return view("pages.commune_details");
  }
}
