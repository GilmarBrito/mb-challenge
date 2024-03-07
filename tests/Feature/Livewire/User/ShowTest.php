<?php

namespace Tests\Feature\Livewire\User;

use App\Livewire\User\Show;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class ShowTest extends TestCase
{
    public function test_renders_successfully()
    {
        $user = User::factory()->create();

        Livewire::actingAs($user)
            ->test(Show::class)
            ->assertStatus(200);
    }

    public function test_check_mount_properties()
    {
        $user = User::factory()->create();

        Livewire::actingAs($user)
            ->test(Show::class)
            ->assertSet('name', $user->name)
            ->assertSet('email', $user->email);
    }
}
