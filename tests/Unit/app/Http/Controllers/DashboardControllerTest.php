<?php

namespace Tests\Unit\app\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Session;
use Tests\TestCase;

class DashboardControllerTest extends TestCase
{
    public function test_the_dashboard_page_returns_a_redirect_response_with_guest(): void
    {
        $response = $this->get('/dashboard');

        $this->assertTrue($response->isRedirect());
        $this->assertSame(
            'Please login to access the Dashboard.',
            session('error')
        );
    }

    public function test_the_dashboard_page_returns_a_redirect_response_with_user(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)
            ->get('/dashboard');

        $this->assertTrue($response->isOk());
    }
}
