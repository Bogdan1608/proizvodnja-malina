@extends('layout')

@section('content')
<div class="container d-flex flex-column align-items-center mt-5">
    
    <div class="shadow-lg mb-4 text-center p-3" 
         style="background-color: #D21F3C; color: black; width: 80%; border-radius: 25px;">
        <h1 class="fw-bold m-0 text-uppercase">IZMENI TRANSPORT</h1>
    </div>

    <div class="shadow-lg p-5" 
         style="background-color: #6076A5; color: black; width: 85%; border-radius: 30px; min-height: 400px;">
        
        <h3 class="fw-bold mb-4 text-dark">Prepravi podatke:</h3>
        
        <form action="{{ route('transport.update', $transport->id) }}" method="POST">
            @csrf
            @method('PUT') <div class="mb-4">
                <label class="fw-bold fs-4 d-block mb-2">Informacije o transportu:</label>
                <input type="text" name="info" class="form-control form-control-lg shadow-sm" 
                       style="border-radius: 15px; border: none;" 
                       value="{{ $transport->info }}" required>
            </div>

            <div class="d-flex flex-column gap-3 mt-5">
                <button type="submit" class="btn btn-light fw-bold fs-4 shadow-sm" 
                        style="border-radius: 15px; padding: 10px;">
                    Sačuvaj izmene
                </button>
                
                <a href="{{ route('transport.index') }}" class="text-decoration-none text-dark fw-bold fs-5 text-center mt-2">
                    Odustani i nazad
                </a>
            </div>
        </form>
    </div>
</div>
@endsection