<?php

namespace Tests\Unit\app\Http\Controllers;

use App\Models\User;
use Tests\TestCase;

class UserControllerTest extends TestCase
{
    public function test_the_profile_page_returns_a_redirect_response_with_guest(): void
    {
        $response = $this->get('/profile');

        $this->assertTrue($response->isRedirect());
        $this->assertSame(
            'Please login to access the Profile.',
            session('error')
        );
    }

    public function test_the_profile_page_returns_a_redirect_response_with_user(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)
            ->get('/profile');

        $this->assertTrue($response->isOk());
    }
}
