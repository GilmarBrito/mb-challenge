<?php

namespace Tests\Feature\Livewire\Crypto;

use App\Livewire\Crypto\Chart;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class ChartTest extends TestCase
{
    public function test_renders_successfully()
    {
        Livewire::test(Chart::class)
            ->assertStatus(200);
    }
}
