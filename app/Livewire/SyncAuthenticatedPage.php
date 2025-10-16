<?php

namespace App\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;
use Laravel\Socialite\Facades\Socialite;
use App\Models\Syncs;

class SyncAuthenticatedPage extends Component
{

    // public function showSyncedGames(Request $request) {
        
    // }

    public function render(Request $request)
    {
        
        
        return view('livewire.sync-authenticated-page');
    }
}
