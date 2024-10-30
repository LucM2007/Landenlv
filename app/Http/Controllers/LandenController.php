<?php


namespace App\Http\Controllers;

use App\Models\Land;
use Illuminate\Http\Request;

class LandenController extends Controller
{
    public function index()
    {
        $landen = Land::all();
        return view('landen.index', compact('landen'));
    }

    public function create()
    {
        return view('landen.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Naam' => 'required|string|max:255',
            'EersteTaal' => 'nullable|string|max:255',
            'AantalInwooners' => 'nullable|integer',
            'AantalInwoonersDatum' => 'nullable|date',
            'Hooftstad' => 'nullable|string|max:255',
            'TelefoonCode' => 'nullable|integer',
            'Bnp' => 'nullable|numeric|digits_between:1,8',
            'BnpDatum' => 'nullable|date',
            'Gevonden' => 'required|date', // Zorg ervoor dat dit veld vereist is
        ]);

        Land::create([
            'Naam' => $request->Naam,
            'EersteTaal' => $request->EersteTaal,
            'AantalInwooners' => $request->AantalInwooners,
            'AantalInwoonersDatum' => $request->AantalInwoonersDatum,
            'Hooftstad' => $request->Hooftstad,
            'TelefoonCode' => $request->TelefoonCode,
            'Bnp' => $request->Bnp,
            'BnpDatum' => $request->BnpDatum,
            'Gevonden' => $request->Gevonden, // Deze waarde komt van de gebruiker
        ]);

        return redirect()->route('landen.index')->with('success', 'Land succesvol toegevoegd!');
    }

    public function edit($id)
    {
        $landen = Land::findOrFail($id);
        return view('landen.edit', compact('landen'));
    }
    
    

    public function update(Request $request, Land $land)
    {
        $request->validate([
            'Naam' => 'required|string|max:255',
            'EersteTaal' => 'nullable|string|max:255',
            'AantalInwooners' => 'nullable|integer',
            'Hooftstad' => 'nullable|string|max:255',
            'TelefoonCode' => 'nullable|integer',
        ]);
    
        $land->update($request->all());
    
        return redirect()->route('landen.index')->with('success', 'Land succesvol bijgewerkt!');
    }
    
    
// app/Http/Controllers/LandenController.php

public function destroy($id)
{
    $land = Land::find($id);

    if ($land) {
        $land->delete();
        return redirect()->route('landen.index')->with('success', 'Land succesvol verwijderd!');
    }

    return redirect()->route('landen.index')->with('error', 'Land niet gevonden.');
}

}
