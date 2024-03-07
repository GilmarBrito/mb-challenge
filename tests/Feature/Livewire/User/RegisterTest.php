<?php

namespace Tests\Feature\Livewire\User;

use App\Livewire\User\Register;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    public function test_renders_successfully()
    {
        Livewire::test(Register::class)
            ->assertStatus(200);
    }
}
