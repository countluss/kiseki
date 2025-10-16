<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Home;
use App\Livewire\Signup;
use App\Livewire\Login;
use App\Livewire\Settings;
use App\Livewire\Mygames;
use App\Livewire\SettingsProfile;
use App\Livewire\SettingsSync;
use App\Http\Controllers\SteamAuthManager;
use App\Livewire\SyncAuthenticatedPage;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', Home::class)->name('home');
Route::get('/login', Login::class)->name('login')
->middleware('guest');
Route::get('/signup', Signup::class)
->middleware('guest');
Route::get('/settings', Settings::class)
->middleware('auth');
Route::get('/mygames', Mygames::class)
->middleware('auth');
Route::get('/settings/profile', SettingsProfile::class);
Route::get('/settings/sync', SettingsSync::class);

Route::get('/settings/auth/steam/link', [SteamAuthManager::class, 'attemptSteamAuth'])->name('attemptLink');
Route::get('/settings/auth/steam/linked', [SteamAuthManager::class, 'callbackFromSteam'])->name('successSteamAuth');
Route::get('/settings/steam-sync', SyncAuthenticatedPage::class)->name('steamSync');
// Route::get('/testing/steam-sync', SyncAuthenticatedPage::class);
// Redirects here after successfull steam sync