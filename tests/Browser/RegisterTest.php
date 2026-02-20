<?php

use Illuminate\Support\Facades\Auth;

it('registers a user', function () {
    visit('/register')
        ->fill('name', 'John Doe')
        ->fill('email', 'johndoe@example.com')
        ->fill('password', 'password123!@#')
        ->click('Create account')
        ->assertPathIs('/');

    $this->assertAuthenticated();

    expect(Auth::user())->toMatchArray([
        'name' => 'John Doe',
        'email' => 'johndoe@example.com',
    ]);
});
