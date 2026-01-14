@extends('layout')

@section('content')
<div class="container d-flex flex-column align-items-center mt-5">
    <div class="shadow-lg mb-4 text-center p-3" style="background-color: #D21F3C; color: black; width: 80%; border-radius: 25px;">
        <h1 class="fw-bold m-0 text-uppercase">IZMENI TRANSPORT</h1>
    </div>

    <div class="shadow-lg p-5" style="background-color: #6076A5; width: 85%; border-radius: 30px;">
        <form action="{{ route('transport.update', $transport->id) }}" method="POST">
            @csrf
            @method('PUT') <div class="mb-3">
                <label class="fw-bold text-white">Datum:</label>
                <input type="text" name="date" class="form-control" value="{{ $transport->date }}">
            </div>
            
            <div class="mb-3">
                <label class="fw-bold text-white">Količina (kg):</label>
                <input type="number" name="quantity" class="form-control" value="{{ $transport->quantity }}">
            </div>

            <div class="mb-3">
                <label class="fw-bold text-white">Skladište:</label>
                <input type="text" name="storage" class="form-control" value="{{ $transport->storage }}">
            </div>

            <button type="submit" class="btn btn-light fw-bold w-100 mt-3">SAČUVAJ IZMENE</button>
        </form>
    </div>
</div>
@endsection