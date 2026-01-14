@extends('layout')

@section('content')
<div class="container d-flex flex-column align-items-center mt-5">
    
    <div class="shadow-lg mb-4 text-center p-3" 
         style="background-color: #D21F3C; color: black; width: 80%; border-radius: 25px;">
        <h1 class="fw-bold m-0 text-uppercase">DETALJI BRANJA</h1>
    </div>

    <div class="shadow-lg p-5" 
         style="background-color: #6076A5; color: black; width: 85%; border-radius: 30px;">
        
        <form action="{{ route('harvest.store') }}" method="POST" class="fs-4 fw-bold">
            @csrf
            
            <div class="mb-3">
                <label class="form-label">Zasad:</label>
                <select name="plot_id" class="form-control border-0 rounded-3" style="background-color: #f8f9fa;">
                    @foreach($plots as $plot)
                        <option value="{{ $plot->id }}">{{ $plot->location }} ({{ $plot->type }})</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Radnik:</label>
                <input type="text" name="worker_name" class="form-control border-0 rounded-3" style="background-color: #f8f9fa;">
            </div>

            <div class="mb-3">
                <label class="form-label">Datum:</label>
                <input type="date" name="harvest_date" value="{{ date('Y-m-d') }}" class="form-control border-0 rounded-3" style="background-color: #f8f9fa;">
            </div>

            <div class="mb-3">
                <label class="form-label">Vreme:</label>
                <input type="time" name="harvest_time" value="{{ date('H:i') }}" class="form-control border-0 rounded-3" style="background-color: #f8f9fa;">
            </div>

            <div class="mb-4">
                <label class="form-label">Količina (kg):</label>
                <input type="number" step="0.01" name="quantity" class="form-control border-0 rounded-3" style="background-color: #f8f9fa;">
            </div>

            <div class="d-flex flex-column gap-2 mt-4">
                <button type="submit" class="text-decoration-none text-black fw-bold fs-3 border-0 bg-transparent text-start p-0">
                    Sačuvaj
                </button>
                <a href="{{ route('harvest.index') }}" class="text-decoration-none text-black fw-bold fs-4">
                    Otkaži
                </a>
            </div>
        </form>
    </div>
</div>
@endsection