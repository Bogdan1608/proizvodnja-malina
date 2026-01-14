@extends('layout')

@section('content')
<div class="container d-flex flex-column align-items-center mt-5">
    
    <div class="shadow-lg mb-4 text-center p-3" 
         style="background-color: #D21F3C; color: black; width: 80%; border-radius: 25px;">
        <h1 class="fw-bold m-0 text-uppercase">IZMENI DETALJE ZASADA</h1>
    </div>

    <div class="shadow-lg p-5" 
         style="background-color: #6076A5; color: black; width: 85%; border-radius: 30px;">
        
        <form action="{{ route('plot.update', $plot->id) }}" method="POST" class="fs-4 fw-bold">
            @csrf
            @method('PUT') <input type="hidden" name="name" value="{{ $plot->name }}">
            <input type="hidden" name="variety" value="{{ $plot->variety }}">

            <div class="mb-3">
                <label class="form-label">Površina:</label>
                <input type="text" name="area" value="{{ $plot->area }}" class="form-control border-0 rounded-3" style="background-color: #f8f9fa;">
            </div>

            <div class="mb-3">
                <label class="form-label">Broj sadnica:</label>
                <input type="number" name="seedlings_count" value="{{ $plot->seedlings_count }}" class="form-control border-0 rounded-3" style="background-color: #f8f9fa;">
            </div>

            <div class="mb-3">
                <label class="form-label">Tip malina:</label>
                <input type="text" name="type" value="{{ $plot->type }}" class="form-control border-0 rounded-3" style="background-color: #f8f9fa;">
            </div>

            <div class="mb-3">
                <label class="form-label">Datum sadnje:</label>
                <input type="date" name="planted_at" value="{{ $plot->planted_at }}" class="form-control border-0 rounded-3" style="background-color: #f8f9fa;">
            </div>

            <div class="mb-4">
                <label class="form-label">Lokacija:</label>
                <input type="text" name="location" value="{{ $plot->location }}" class="form-control border-0 rounded-3" style="background-color: #f8f9fa;">
            </div>

            <div class="d-flex flex-column gap-2 mt-4">
                <button type="submit" class="text-decoration-none text-black fw-bold fs-3 border-0 bg-transparent text-start p-0">
                    Sačuvaj izmene
                </button>
                
                <a href="{{ route('plot.index') }}" class="text-decoration-none text-black fw-bold fs-4">
                    Otkaži
                </a>
            </div>
        </form>
    </div>
</div>
@endsection