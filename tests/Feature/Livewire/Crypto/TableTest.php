<?php

namespace Tests\Feature\Livewire\Crypto;

use App\Livewire\Crypto\Table;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class TableTest extends TestCase
{
    public function test_renders_successfully()
    {
        $user = User::factory()->create();

        Livewire::actingAs($user)
            ->test(Table::class)
            ->assertStatus(200);
    }
}
