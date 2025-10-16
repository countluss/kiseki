<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\Auth;

#[Title('Settings - Kiseki')]
class Settings extends Component
{

    public function logout() {
        Auth::logoutCurrentDevice();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        $this->redirect('/home', navigate: true);
    }

    public function render()
    {
        return view('livewire.settings');
    }
}
