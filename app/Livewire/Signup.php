<?php

namespace App\Livewire;

use App\Models\Syncs;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

#[Title('Sign up - Kiseki')]
class Signup extends Component
{

    public string $username = '';
    public string $email = '';
    public string $password = '';
    public string $confPassword = '';

    public function signup() {

        $validated = $this->validate([ 
            'username' => 'required|max:32|unique:App\Models\User,name',
            'email' => 'required',
            'password' => 'required|min:8',
            'confPassword' => 'same:password'
        ]);

        $user = User::create([
            'name' => $this->username,
            'email' => $this->email,
            'password' => Hash::make($this->password)
        ]);

        $sync = new Syncs();
        $sync->user_id = $user->id;
        $sync->save();
        

        Auth::login($user);
        session()->regenerate();
        return $this->redirect('/home', navigate: true);

    }

    public function render()
    {
        return view('livewire.signup');
    }
}
