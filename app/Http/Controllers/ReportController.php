<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Http\Requests\StoreReportRequest;
use App\Http\Requests\UpdateReportRequest;
use App\Models\User;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $communes = User::where("commune", "true")->get();
        return view('pages.postReport')->with(["communes" => $communes]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReportRequest $request)

    {   

        Report::create([
            "title" => $request->title,
            "commune"=>$request->commune,
            "quartie"=>$request->quartie,
            "localisation"=>$request->localisation,
            "categorie"=>$request->categorie,
            "description"=>$request->description,
            
        ]);
        return redirect()->back()->with("success","report added");
    }

    /**
     * Display the specified resource.
     */
    public function show(Report $report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Report $report)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReportRequest $request, Report $report)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Report $report)
    {
        //
    }
}
