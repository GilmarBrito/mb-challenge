<?php

namespace Tests\Feature\Livewire\User;

use App\Livewire\User\Logout;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class LogoutTest extends TestCase
{
    public function test_renders_successfully()
    {
        Livewire::test(Logout::class)
            ->assertStatus(200);
    }
}
