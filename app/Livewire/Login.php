<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\Auth;

#[Title('Log in - Kiseki')]
class Login extends Component
{

    public string $username = '';
    public string $password = '';

    public function login() {

        $validated = $this->validate([ 
            'username' => 'required|max:32',
            'password' => 'required|min:8',
        ]);

        if (Auth::attempt([
            'name' => $this->username,
            'password' => $this->password
        ])) {

            session()->regenerate();

            $this->redirect('/home', navigate: true);
        }
    }

    public function render()
    {
        return view('livewire.login');
    }
}
