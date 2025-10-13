<?php

namespace App\Http\Controllers;

use App\Models\Realisation;

class RealisationController extends Controller
{
    public function index()
    {
        $realisations = Realisation::all();
        return view('realisations.index', compact('realisations'));
    }
}
