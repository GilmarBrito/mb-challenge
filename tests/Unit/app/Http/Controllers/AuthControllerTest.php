<?php

namespace Tests\Unit\app\Http\Controllers;

use Illuminate\Support\Facades\View;
use Tests\TestCase;

class AuthControllerTest extends TestCase
{
    public function test_the_login_page_returns_a_successful_response(): void
    {
        $response = $this->get('/auth/login');

        $this->assertTrue($response->isOk());
    }

    public function test_the_auth_login_view_can_be_rendered(): void
    {
        $view = $this->view('auth.login', ['title' => 'Login']);

        $view->assertSee('Login');
        $view->assertSee('Email Address');
        $view->assertSee('Password');
    }

    public function test_the_register_page_returns_a_successful_response(): void
    {
        $response = $this->get('/auth/register');

        $this->assertTrue($response->isOk());
    }

    public function test_the_auth_register_view_can_be_rendered(): void
    {
        $view = $this->view('auth.register', ['title' => 'Register']);

        $view->assertSee('Register');
        $view->assertSee('Email Address');
        $view->assertSee('Password');
        $view->assertSee('Confirm Password');
    }
}
