<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medecin;


class MedecinController extends Controller
{
    //
    public function index()
    {
        $medecins = Medecin::all();

        return view('medecins.index', compact('medecins'));
    }
}
