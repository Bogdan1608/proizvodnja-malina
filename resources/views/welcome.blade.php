@extends('layout')

@section('content')
<div class="container text-center">
    <h1 class="display-4 fw-bold text-white mb-5" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.2);">
        DASHBOARD
    </h1>

    <div class="row g-4 justify-content-center">
        @php
            $cards = [
                ['title' => 'EVIDENCIJA ZASADA', 'desc' => 'Upravljanje parcelama i sortama.', 'link' => route('plot.index')],
                ['title' => 'PRAĆENJE BRANJA', 'desc' => 'Dnevni unos ubranih količina.', 'link' => route('harvest.index')],
                ['title' => 'TRANSPORT', 'desc' => 'Logistika i isporuka hladnjačama.', 'link' => route('transport.index')],
                ['title' => 'ANALIZA PRINOSA', 'desc' => 'Statistika i profitabilnost.', 'link' => route('analysis.index')],
            ];
        @endphp

        @foreach($cards as $card)
        <div class="col-md-6">
            <div class="p-5 rounded-4 h-100 border-0 shadow-lg transition-hover" style="background-color: #D21F3C; color: white;">
                <h2 class="fw-bold mb-3">{{ $card['title'] }}</h2>
                <p class="mb-4" style="color: #ffcdd2; font-size: 1.1rem;">{{ $card['desc'] }}</p>
                <a href="{{ $card['link'] }}" class="btn btn-light btn-lg fw-bold px-5 py-2 rounded-3 shadow-sm" style="color: #D21F3C;">
                    OTVORI →
                </a>
            </div>
        </div>
        @endforeach
    </div>

    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="shadow-lg rounded-4 overflow-hidden border border-4 border-white">
                <img src="{{ asset('images/Screenshot 2026-01-13 044200.png') }}" 
                     class="img-fluid w-100" 
                     style="max-height: 400px; object-fit: cover;" 
                     alt="Maline">
            </div>
        </div>
    </div>
</div>

<style>
    .transition-hover { 
        transition: all 0.3s ease-in-out; 
    }
    .transition-hover:hover { 
        transform: translateY(-10px); 
        box-shadow: 0 15px 30px rgba(0,0,0,0.3) !important;
    }
    body {
        overflow-x: hidden;
    }
</style>
@endsection