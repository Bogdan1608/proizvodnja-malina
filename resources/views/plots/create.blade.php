@extends('layout')

@section('content')
<div class="container d-flex flex-column align-items-center mt-5">
    <div class="shadow-lg mb-4 text-center p-3" style="background-color: #D21F3C; color: black; width: 80%; border-radius: 25px;">
        <h1 class="fw-bold m-0 text-uppercase">DETALJI ZASADA</h1>
    </div>

    <div class="shadow-lg p-5" style="background-color: #6076A5; color: black; width: 85%; border-radius: 30px;">
        <form action="{{ route('plot.store') }}" method="POST" class="fs-4 fw-bold">
            @csrf
            <input type="hidden" name="name" value="Zasad">
            <input type="hidden" name="variety" value="Nepoznato">

            <div class="mb-3">
                <label class="form-label">Površina:</label>
                <input type="text" name="area" class="form-control border-0 rounded-3">
            </div>
            <div class="mb-3">
                <label class="form-label">Broj sadnica:</label>
                <input type="number" name="seedlings_count" class="form-control border-0 rounded-3">
            </div>
            <div class="mb-3">
                <label class="form-label">Tip malina:</label>
                <input type="text" name="type" class="form-control border-0 rounded-3">
            </div>
            <div class="mb-3">
                <label class="form-label">Datum sadnje:</label>
                <input type="date" name="planted_at" class="form-control border-0 rounded-3">
            </div>
            <div class="mb-4">
                <label class="form-label">Lokacija:</label>
                <input type="text" name="location" class="form-control border-0 rounded-3">
            </div>

            <button type="submit" class="btn btn-danger fw-bold fs-3">Sačuvaj</button>
        </form>
    </div>
</div>
@endsection