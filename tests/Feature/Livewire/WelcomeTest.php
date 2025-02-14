<?php

namespace Tests\Feature\Livewire;

use App\Livewire\Welcome;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class WelcomeTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(Welcome::class)
            ->assertStatus(200);
    }
}
