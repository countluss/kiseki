<?php

use App\Livewire\Signup;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;

test('Authentication', function () {

    // Authentication Parameters
    // public string $username = '';
    // public string $email = '';
    // public string $password = '';
    // public string $confPassword = '';

    Livewire::test(Signup::class)
        ->set('username', 'Skyler1')
        ->set('email', "hello@gmail.com")
        ->set('password','helloworld')
        ->set('confPassword','helloworld')
        ->call('signup')
        ->assertRedirect('/home');


});