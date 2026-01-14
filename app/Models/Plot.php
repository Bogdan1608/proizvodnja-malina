<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plot extends Model
{
    use HasFactory;

    // Dodata su polja 'name' i 'variety' kako bi baza dozvolila upis
    protected $fillable = [
        'name',
        'variety',
        'area', 
        'seedlings_count', 
        'type', 
        'planted_at', 
        'location'
    ];
}