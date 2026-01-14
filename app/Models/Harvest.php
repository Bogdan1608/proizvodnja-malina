<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Harvest extends Model
{
    use HasFactory;

    // Dozvoljavamo upis ovih polja u bazu
    protected $fillable = [
        'plot_id', 
        'worker_name', 
        'harvest_date', 
        'harvest_time', 
        'quantity'
    ];

    /**
     * Povezujemo branje sa zasadom. 
     * Ovo nam omogućava da kasnije lako vidimo čije je ovo branje.
     */
    public function plot()
    {
        return $this->belongsTo(Plot::class);
    }
}