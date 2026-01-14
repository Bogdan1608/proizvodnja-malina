@extends('layout')

@section('content')
<div class="container d-flex flex-column align-items-center mt-5">
    
    <div class="shadow-lg mb-4 text-center p-3" 
         style="background-color: #D21F3C; color: black; width: 80%; border-radius: 25px;">
        <h1 class="fw-bold m-0 text-uppercase">TRANSPORT</h1>
    </div>

    <div class="shadow-lg p-5" 
         style="background-color: #6076A5; color: black; width: 85%; border-radius: 30px; min-height: 400px;">
        
        <h3 class="fw-bold mb-4">Lista transporta:</h3>
        
        <ul class="list-unstyled fs-4 mb-5">
            @forelse($transports as $key => $t)
                <li class="mb-3 p-2 border-bottom border-dark d-flex justify-content-between align-items-center">
                    <span>{{ $key + 1 }}. {{ $t->info }}</span>
                    
                    <div class="d-flex gap-2">
                        <a href="{{ route('transport.edit', $t->id) }}" class="btn btn-sm btn-light fw-bold shadow-sm">
                            Izmeni
                        </a>

                        <form action="{{ route('transport.destroy', $t->id) }}" method="POST" onsubmit="return confirm('Brate, jesi siguran?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger fw-bold shadow-sm">
                                Izbriši
                            </button>
                        </form>
                    </div>
                </li>
            @empty
                <li class="text-center py-4">Nema unetih transporta. Dodajte prvi!</li>
            @endforelse
        </ul>

        <div class="text-center mt-4">
    <a href="{{ route('transport.create') }}" class="btn btn-light fw-bold fs-3 px-5 shadow" 
       style="border-radius: 20px; color: black;">
        + DODAJ NOVI TRANSPORT
    </a>
</div>
    </div>

    <a href="/" class="btn mt-4 fw-bold text-white shadow" style="background-color: #6076A5; border-radius: 10px; padding: 10px 20px;">
        ← Nazad na Dashboard
    </a>
</div>
@endsection