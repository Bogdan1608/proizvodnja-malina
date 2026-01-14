<?php

namespace App\Http\Controllers;

use App\Models\Analysis;
use App\Models\Harvest;
use App\Models\Plot;
use Illuminate\Http\Request;

class AnalysisController extends Controller
{
    /**
     * Prikazuje početnu listu analiza (plavi box sa tekstom "Pregled izveštaja").
     */
    public function index()
    {
        // Uzimamo sve analize iz baze
        $analyses = Analysis::all();
        
        // Vraćamo tvoj index fajl
        return view('analysis.index', compact('analyses'));
    }

    /**
     * Prikazuje onaj novi prozor "IZVEŠTAJI / GRAFIKONI".
     * Ovo je povezano sa onom rutom koju smo dodali u web.php
     */
    public function reports()
    {
        // Otvara fajl resources/views/analysis/reports.blade.php
        return view('analysis.reports');
    }
    public function historyTable()
{
    // Otvara resources/views/analysis/history_table.blade.php
    return view('analysis.history_table');
}
public function costsTable()
{
    // Otvara resources/views/analysis/costs_table.blade.php
    return view('analysis.costs_table');
}

    /**
     * Ovde ćemo kasnije dodati funkciju za Tabelu prinosa 
     * koja će stvarno da sabira kilograme iz baze.
     */
}