<?php

namespace App\Http\Controllers;

use App\Models\Harvest;
use App\Models\Plot;
use Illuminate\Http\Request;

class HarvestController extends Controller
{
    /**
     * Prikazuje listu svih branja (stranica Praćenje branja).
     */
    public function index()
    {
        // Povlačimo branja zajedno sa podacima o zasadu
        $harvests = Harvest::with('plot')->get();
        return view('harvests.index', compact('harvests'));
    }

    /**
     * Otvara prozor "DETALJI BRANJA".
     */
    public function create()
    {
        $plots = Plot::all();
        return view('harvests.create', compact('plots')); 
    }

    /**
     * Čuva podatke o branju u bazu.
     */
    public function store(Request $request)
    {
        // Čuvamo novo branje u bazu
        Harvest::create($request->all());

        return redirect()->route('harvest.index');
    }

    /**
     * Brisanje branja iz baze.
     */
    public function destroy($id)
    {
        // Pronalazimo branje po ID-u i brišemo ga
        $harvest = Harvest::findOrFail($id);
        $harvest->delete();

        // Vraćamo se na listu nakon brisanja
        return redirect()->route('harvest.index')->with('success', 'Branje obrisano!');
    }
}