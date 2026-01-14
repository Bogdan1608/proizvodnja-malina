@extends('layout')

@section('content')
<div class="container d-flex flex-column align-items-center mt-5">
    
    <div class="shadow-lg mb-4 text-center p-3" 
         style="background-color: #D21F3C; color: black; width: 80%; border-radius: 25px;">
        <h1 class="fw-bold m-0 text-uppercase">ANALIZA PRINOSA</h1>
    </div>

    <div class="shadow-lg p-5" 
         style="background-color: #6076A5; color: black; width: 85%; border-radius: 30px; min-height: 400px;">
        
        <h3 class="fw-bold mb-4">Lista analiza:</h3>
        
        <ul class="list-unstyled fs-4 mb-5">
            @forelse($analyses as $key => $analysis)
                <li class="mb-2">{{ $key + 1 }}. {{ $analysis->info }}</li>
            @empty
                <li class="mb-2">1. Zasad A - 500kg 1000e</li>
                <li class="mb-2">2. Zasad B - 600kg 1200e</li>
            @endforelse
        </ul>

        <a href="{{ route('analysis.reports') }}" class="text-decoration-none text-black fw-bold fs-3">
    Pregled izveštaja
</a>
    </div>

</div>
@endsection