<?php

namespace Tests\Feature;

use App\Models\Plot;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PlotControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function test_can_see_list_of_plots()
    {
        // Pravimo korisnika i ulogujemo ga
        $user = User::factory()->create();
        
        // Pravimo jedan testni malinjak u bazi
        Plot::create([
            'name' => 'Gornja njiva',
            'location' => 'Arilje',
            'size_ares' => 10,
            'variety' => 'Vilamet'
        ]);

        // Proveravamo da li se vidi na stranici
        $response = $this->actingAs($user)->get('/plot');

        $response->assertStatus(200);
    }

    /** @test */
    public function test_can_create_new_plot()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->post('/plot', [
            'name' => 'Nova Parcela',
            'location' => 'Ivanjica',
            'size_ares' => 25,
            'variety' => 'Miker',
        ]);

        $this->assertDatabaseHas('plots', [
            'name' => 'Nova Parcela'
        ]);
    }
}