<?php

use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Laravel\Socialite\Contracts\Provider;
use Illuminate\Http\RedirectResponse;
use Livewire\Livewire;
use App\Livewire\Signup;
use Illuminate\Support\Facades\Http;
// use Mockery;

test('Steam Authentication', function () {

    Livewire::test(Signup::class)
        ->set('username', 'Skyler1')
        ->set('email', "hello@gmail.com")
        ->set('password','helloworld')
        ->set('confPassword','helloworld')
        ->call('signup');

    $user = User::latest()->first();

    $provider = Mockery::mock(Provider::class);
    $provider->shouldReceive('redirect')->andReturn(new RedirectResponse(route('successSteamAuth')));
    
    $mockSteamUser = Mockery::mock(\Laravel\Socialite\Contracts\User::class);
    $mockSteamUser->id = '1234567890';

    $provider->shouldReceive('user')->andReturn($mockSteamUser);

    Socialite::shouldReceive('driver')->with('steam')->andReturn($provider);
    
    // Socialite::shouldReceive('driver')
    //     ->with('steam')
    //     ->andReturn($provider);

    $response = $this->actingAs($user)->get(route('attemptLink'));
    $response->assertRedirect(route('successSteamAuth'));

    Http::fake();

    $response = $this->actingAs($user)->get(route('successSteamAuth'));

    $this->assertDatabaseHas('syncs', [
        'user_id' => $user->id,
        'steam_id' => '1234567890',
    ]);

        // return Socialite::driver('steam')->redirect();
    
});
