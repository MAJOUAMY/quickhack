<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommuneController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get("/postReport", [ReportController::class, "create"])->name("postReport");
    Route::get("/ajouterCommune", [ReportController::class, "create"])->name("ajouterCommune");

    Route::post("/addReport", [ReportController::class, "store"]);
    // Route::post("/addReport",[ReportController::class , "store"]);
});
//admin routes
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/dashboard/commune', [AdminController::class, 'getCommunes']);
    Route::get("/ajouterCommune", [CommuneController::class, "ajouterCommune"])->name("ajouterCommune");
    Route::post("/storeCommune", [CommuneController::class, "storeCommune"]);
});


//agent routes
Route::middleware(['auth', 'role:commune'])->group(function () {
    Route::get('/commune/dashboard', [CommuneController::class, 'dashboard'])->name('commune.dashboard');
    Route::get('/commune/dashboard/reports', [CommuneController::class, 'getReports']);
});
require __DIR__ . '/auth.php';


//post job
Route::get("/communes", [CommuneController::class, "getPublicCommunes"]);
Route::get("/communes/{id}", [CommuneController::class, "getOneCommuneWithReport"]);
Route::get("/reports/{id}", [CommuneController::class, "getReportDetail"]);
Route::view('/about', 'pages.about')->name('about');

