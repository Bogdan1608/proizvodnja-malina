@extends('layout')

@section('content')
<div class="container d-flex flex-column align-items-center mt-5">
    
    <div class="shadow-lg mb-4 text-center p-3" 
         style="background-color: #D21F3C; color: black; width: 80%; border-radius: 25px;">
        <h1 class="fw-bold m-0 text-uppercase">PRAĆENJE BRANJA</h1>
    </div>

    <div class="shadow-lg p-5" 
         style="background-color: #6076A5; color: black; width: 85%; border-radius: 30px; min-height: 400px;">
        
        <h3 class="fw-bold mb-4">Lista branja:</h3>
        
        <ul class="list-unstyled fs-4 mb-5">
            @forelse($harvests as $harvest)
                <li class="mb-3 p-2 border-bottom border-dark d-flex justify-content-between align-items-center">
                    <div>
                        <strong>{{ $harvest->harvest_date }}</strong> - 
                        {{ $harvest->plot->location }}: 
                        <span class="badge bg-light text-dark">{{ $harvest->quantity }} kg</span>
                        <small class="d-block text-dark opacity-75">Radnik: {{ $harvest->worker_name }} u {{ $harvest->harvest_time }}h</small>
                    </div>

                    <form action="{{ route('harvest.destroy', $harvest->id) }}" method="POST" onsubmit="return confirm('Brate, jesi siguran da brišeš ovo branje?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger fw-bold shadow-sm" style="border-radius: 10px;">
                            Obriši
                        </button>
                    </form>
                </li>
            @empty
                <li class="text-white-50 text-center">Trenutno nema unetih branja.</li>
            @endforelse
        </ul>

        <div class="text-center">
            <a href="{{ route('harvest.create') }}" class="text-decoration-none text-black fw-bold fs-4 d-inline-block p-2 shadow-sm" style="background-color: #f8f9fa; border-radius: 15px;">
                + Dodaj branje
            </a>
        </div>
    </div>

    <a href="/" class="btn mt-4 fw-bold text-white shadow" style="background-color: #6076A5; border-radius: 10px;">
        ← Nazad na Dashboard
    </a>
</div>
@endsection