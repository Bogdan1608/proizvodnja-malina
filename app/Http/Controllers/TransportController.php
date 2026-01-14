<?php

namespace App\Http\Controllers;

use App\Models\Transport;
use Illuminate\Http\Request;

class TransportController extends Controller
{
    /**
     * Prikazuje listu transporta (plavi prozor sa natpisom TRANSPORT).
     */
    public function index()
    {
        // Povlačimo sve transporte iz baze
        $transports = Transport::all();
        // Gleda: resources/views/transport/index.blade.php
        return view('transport.index', compact('transports'));
    }

    /**
     * Otvara formu "DETALJI TRANSPORTA" za unos novog zapisa.
     */
    public function create()
    {
        // Gleda: resources/views/transport/create.blade.php
        return view('transport.create');
    }

    /**
     * Čuva novi transport u bazu podataka.
     */
    public function store(Request $request)
    {
        // Čuvamo podatke koje si uneo u formu
        Transport::create($request->all());

        return redirect()->route('transport.index')->with('success', 'Novi transport dodat!');
    }

    /**
     * Otvara prozor za izmenu konkretnog transporta.
     */
    public function edit($id)
    {
        // Tražimo transport po ID-u
        $transport = Transport::findOrFail($id);
        
        // Gleda: resources/views/transport/edit.blade.php
        return view('transport.edit', compact('transport'));
    }

    /**
     * Snima izmene u bazu podataka.
     */
    public function update(Request $request, $id)
    {
        $transport = Transport::findOrFail($id);
        
        // Uzimamo nove podatke i prepisujemo stare
        $transport->update($request->all());

        return redirect()->route('transport.index')->with('success', 'Transport uspešno izmenjen!');
    }

    /**
     * Briše transport iz baze podataka.
     */
    public function destroy($id)
    {
        $transport = Transport::findOrFail($id);
        $transport->delete();
        
        return redirect()->route('transport.index')->with('success', 'Obrisano!');
    }
}