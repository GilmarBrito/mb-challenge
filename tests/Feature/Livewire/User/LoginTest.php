<?php

namespace Tests\Feature\Livewire\User;

use App\Livewire\User\Login;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class LoginTest extends TestCase
{
    public function test_renders_successfully()
    {
        Livewire::test(Login::class)
            ->assertStatus(200);
    }
}
