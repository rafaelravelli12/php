<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Session;
use Tests\TestCase;

class LoginFeatureTest extends TestCase
{
    protected $redirectTo = '/dashboard';

    public function testSuccessfulLoginAndRedirectsToDashboard()
    {
        $formResponse = $this->get('/login');
        $csrfToken = Session::get('_token');

        $response = $this->post('/login', [
            '_token' => $csrfToken,
            'email' => 'administrador1@laravel.com',
            'password' => 'password',
        ]);

        $response->assertStatus(302);
        $response->assertRedirect('/dashboard');
    }

    public function testFailedLoginDisplaysErrorMessage()
    {
        $formResponse = $this->get('/login');
        $csrfToken = Session::get('_token');

        $response = $this->post('/login', [
            '_token' => $csrfToken,
            'email' => 'invalid@example.com',
            'password' => 'incorrect',
        ]);

        $response->assertStatus(302);
        $response->assertRedirect('/login');
        $response->assertSessionHasErrors(['email']);
    }
}
