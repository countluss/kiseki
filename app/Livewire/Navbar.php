<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;

class Navbar extends Component
{

    public bool $authed;

    public function mount($authed = null)
    {
        $this->authed = $authed;
    }

    public function render(Request $request)
    {
        
        $isAuthPage = $request->is('login') || $request->is('signup');
        $current = '';

        if ($request->is('home')) {
            $current = 'Home';
        } elseif ($request->is('mygames')) {
            $current = 'My Games';
        } elseif ($request->is('settings*')) {
            $current = 'Settings';
        } elseif ($request->is('signup')) {
            $current = 'Signup';
        } elseif ($request->is('login')) {
            $current = 'Login';
        }

        return view('livewire.navbar', [

            'isAuthPage' => $isAuthPage,
            'current' => $current

        ]);
    }
}
