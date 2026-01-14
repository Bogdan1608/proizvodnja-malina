@extends('layout')

@section('content')
<div class="container d-flex flex-column align-items-center mt-5">
    
    <div class="shadow-lg mb-4 text-center p-3" 
         style="background-color: #D21F3C; color: black; width: 80%; border-radius: 25px;">
        <h1 class="fw-bold m-0 text-uppercase">EVIDENCIJA ZASADA</h1>
    </div>

    <div class="shadow-lg p-5" 
         style="background-color: #6076A5; color: black; width: 85%; border-radius: 30px; min-height: 400px;">
        
        <h3 class="fw-bold mb-4">Lista zasada:</h3>
        
        <ul class="list-unstyled fs-4 mb-5">
            @forelse($plots as $key => $plot)
                <li class="mb-4 p-3 border-bottom border-dark d-flex justify-content-between align-items-center">
                    <div>
                        <strong>{{ $key + 1 }}. {{ $plot->location }}</strong> 
                        <span class="fs-6 d-block text-dark opacity-75">Tip: {{ $plot->type }} | Površina: {{ $plot->area }}</span>
                    </div>

                    <div class="d-flex gap-3">
                        <a href="{{ route('plot.edit', $plot->id) }}" class="text-decoration-none text-white fw-bold fs-5 btn btn-sm btn-warning px-3 shadow-sm" style="color: black !important;">
                            Izmeni
                        </a>
                        
                        <form action="{{ route('plot.destroy', $plot->id) }}" method="POST" onsubmit="return confirm('Da li ste sigurni da želite da obrišete ovaj zasad?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger fw-bold fs-5 shadow-sm">
                                Obriši
                            </button>
                        </form>
                    </div>
                </li>
            @empty
                <li class="text-white-50 text-center">Trenutno nema unetih zasada.</li>
            @endforelse
        </ul>

        <div class="mt-4 text-center">
            <a href="{{ route('plot.create') }}" class="btn btn-lg fw-bold shadow-sm" style="background-color: #D21F3C; color: black; border-radius: 15px;">
                + Dodaj novi zasad
            </a>
        </div>
    </div>

    <a href="/" class="btn mt-4 fw-bold text-white shadow" style="background-color: #6076A5; border-radius: 10px; padding: 10px 20px;">
        ← Nazad na Dashboard
    </a>
</div>
@endsection