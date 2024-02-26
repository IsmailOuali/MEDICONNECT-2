<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicament;
use App\Models\SpecialiteMedical;

class MedicamentController extends Controller
{
    /**
     */
    public function index()
    {
        $medicaments = Medicament::all();

        return view('welcome', compact('medicaments'));
    }

    public function docDashboard()
    {
        $medicaments = Medicament::all();

        return view('docDashboard', compact('medicaments'));
    }

    public function dashboard()
    {
        $medicaments = Medicament::all();
        $specialities = SpecialiteMedical::all();
    
        return view('dashboard', compact('medicaments', 'specialities'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'medicament' => 'required|string|max:255',
        ]);
    
        $medicament = new Medicament;
        $medicament->name = $request->medicament;
        $medicament->save();
    
        return back()->with('success', 'Medicament added successfully.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
        public function update(Request $request, string $name)
        {
            $request->validate([
                'medicament' => 'required|string|max:255',
            ]);
        
            $medicament = Medicament::where('name', $name)->firstOrFail();
            $medicament->name = $request->medicament;
            $medicament->save();
        
            return back()->with('success', 'Medicament updated successfully.');
        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $medicament = Medicament::findOrFail($id);
        $medicament->delete();
    
        return back()->with('success', 'Medicament deleted successfully.');
    }
}
