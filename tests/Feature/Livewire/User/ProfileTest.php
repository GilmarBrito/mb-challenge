<?php

namespace Tests\Feature\Livewire\User;

use App\Livewire\User\Profile;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class ProfileTest extends TestCase
{
    public function test_renders_successfully()
    {
        $user = User::factory()->create();
        Livewire::actingAs($user)
            ->test(Profile::class)
            ->assertStatus(200);
    }
}
