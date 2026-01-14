@extends('layout')

@section('content')
<div class="container mt-5">
    <div class="card shadow-lg border-0" style="border-radius: 20px;">
        <div class="card-header bg-white py-3 text-center">
            <h2 class="fw-bold m-0 text-dark">Podaci za grafikon troškova malina</h2>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-striped table-hover m-0 fs-4 text-center">
                    <thead class="table-light">
                        <tr class="fw-bold">
                            <th>Godina</th>
                            <th>Troškovi (RSD)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>2021</td><td>200,000</td></tr>
                        <tr><td>2022</td><td>220,000</td></tr>
                        <tr><td>2023</td><td>250,000</td></tr>
                        <tr><td>2024</td><td>270,000</td></tr>
                        <tr><td>2025</td><td>300,000</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <div class="text-center mt-4">
        <a href="{{ route('analysis.reports') }}" class="btn btn-secondary fw-bold px-4 shadow-sm" style="border-radius: 10px;">
            ← Nazad na Izveštaje
        </a>
    </div>
</div>
@endsection