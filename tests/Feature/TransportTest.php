<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Transport;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TransportTest extends TestCase
{
    // Ovo osigurava da testovi ne prljaju tvoju pravu bazu
    use RefreshDatabase;

    /** @test */
    public function stranica_transporta_se_uspesno_ucitava()
    {
        // Simuliramo odlazak na tvoju listu transporta
        $response = $this->get(route('transport.index'));

        // Proveravamo da li je status 200 (OK)
        $response->assertStatus(200);
    }

    /** @test */
    public function novi_transport_moze_da_se_sacuva()
    {
        // Podaci koje šaljemo, isto kao iz tvoje forme
        $podaci = ['info' => 'Testni unos 100kg'];

        // Šaljemo POST zahtev na tvoj store metod
        $response = $this->post(route('transport.store'), $podaci);

        // Proveravamo da li nas vraća nazad na index
        $response->assertRedirect(route('transport.index'));

        // Proveravamo da li je podatak stvarno u bazi
        $this->assertDatabaseHas('transports', ['info' => 'Testni unos 100kg']);
    }
}