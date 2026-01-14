@extends('layout')

@section('content')
<div class="container text-center">
    <h1 class="mb-4 fw-bold text-white" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.2);">DASHBOARD</h1>
    
    <div class="row g-4 mb-5">
        <div class="col-md-6">
            <a href="/plot" class="btn btn-lg w-100 py-4 shadow-lg" style="background-color: #D21F3C; color: white; border: none; font-weight: bold; border-radius: 15px;">
                EVIDENCIJA ZASADA
            </a>
        </div>
        <div class="col-md-6">
            <a href="/harvest" class="btn btn-lg w-100 py-4 shadow-lg" style="background-color: #D21F3C; color: white; border: none; font-weight: bold; border-radius: 15px;">
                PRAĆENJE BRANJA
            </a>
        </div>
        <div class="col-md-6">
            <a href="#" class="btn btn-lg w-100 py-4 shadow-lg" style="background-color: #D21F3C; color: white; border: none; font-weight: bold; border-radius: 15px;">
                TRANSPORT
            </a>
        </div>
        <div class="col-md-6">
            <a href="#" class="btn btn-lg w-100 py-4 shadow-lg" style="background-color: #D21F3C; color: white; border: none; font-weight: bold; border-radius: 15px;">
                ANALIZA PRINOSA
            </a>
        </div>
    </div>

   <div class="row justify-content-center mt-4">
    <div class="col-md-6"> <div class="shadow-lg rounded-4 overflow-hidden border border-4 border-white">
            <img src="{{ asset('images/Screenshot 2026-01-13 044200.png') }}" 
                 class="img-fluid w-100" 
                 style="max-height: 300px; object-fit: cover;" 
                 alt="Maline">
        </div>
    </div>
</div>
@endsection