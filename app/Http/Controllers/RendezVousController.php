<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RendezVous;

class RendezVousController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required|string',
        ]);

        RendezVous::create([
            'date' => $request->input('time'),
        ]);

        return response()->json(['message' => 'Reservation successful']);
    }
}
