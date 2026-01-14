<?php

namespace App\Http\Controllers;

use App\Models\Plot;
use Illuminate\Http\Request;

class PlotController extends Controller
{
    /**
     * Prikazuje listu svih zasada.
     */
    public function index()
    {
        $plots = Plot::all();
        return view('plots.index', compact('plots'));
    }

    /**
     * Otvara formu za novi unos.
     */
    public function create()
    {
        return view('plots.create');
    }

    /**
     * Čuva novi zasad u bazu.
     */
    public function store(Request $request)
    {
        Plot::create($request->all());
        return redirect()->route('plot.index');
    }

    /**
     * Otvara formu za IZMENU postojećeg zasada.
     */
    public function edit(Plot $plot)
    {
        // $plot je automatski pronađen u bazi preko ID-ja iz linka
        return view('plots.edit', compact('plot'));
    }

    /**
     * Čuva promene (Update) u bazi.
     */
    public function update(Request $request, Plot $plot)
    {
        $plot->update($request->all());
        return redirect()->route('plot.index');
    }

    /**
     * Briše zasad iz baze.
     */
    public function destroy(Plot $plot)
    {
        $plot->delete();
        return redirect()->route('plot.index');
    }
}