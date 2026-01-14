<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlotController;
use App\Http\Controllers\HarvestController;
use App\Http\Controllers\TransportController;
use App\Http\Controllers\AnalysisController;

// 1. Početna strana (Dashboard)
Route::get('/', function () {
    return view('welcome'); 
});

Route::get('/dashboard', function () {
    return view('welcome');
});

// 2. Rute za Analizu i Izveštaje
Route::get('/izvestaji', [AnalysisController::class, 'reports'])->name('analysis.reports');

// Rute za tabele (istorija 2021-2025)
Route::get('/izvestaji/tabela-prinosa', [AnalysisController::class, 'historyTable'])->name('analysis.history_table');

// NOVA RUTA: Za tabelu troškova koju si tražio
Route::get('/izvestaji/tabela-troskova', [AnalysisController::class, 'costsTable'])->name('analysis.costs_table');

// 3. Resursne rute
Route::resource('plot', PlotController::class);
Route::resource('harvest', HarvestController::class);
Route::resource('transport', TransportController::class);
Route::resource('analysis', AnalysisController::class);