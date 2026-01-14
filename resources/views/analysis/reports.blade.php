@extends('layout')

@section('content')
<div class="container d-flex flex-column align-items-center mt-5">
    
    <div class="shadow-lg mb-4 text-center p-4" 
         style="background-color: #D21F3C; color: black; width: 80%; border-radius: 25px;">
        <h1 class="fw-bold m-0 text-uppercase">IZVEŠTAJI / GRAFIKONI</h1>
    </div>

    <div class="shadow-lg p-5 d-flex flex-column align-items-start justify-content-center" 
         style="background-color: #6076A5; color: black; width: 85%; border-radius: 30px; min-height: 350px;">
        
        <a href="{{ route('analysis.history_table') }}" class="text-decoration-none text-black fw-bold fs-2 mb-3">
    Tabela prinosa
</a>
        
        <a href="{{ route('analysis.costs_table') }}" class="text-decoration-none text-black fw-bold fs-2">
    Grafikon troškova
</a>
        
        <a href="/" class="text-decoration-none text-black fw-bold fs-3 mt-4">
            Nazad na Dashboard
        </a>
    </div>
</div>
@endsection