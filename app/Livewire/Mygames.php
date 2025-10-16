<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('My Games - Kiseki')]
class Mygames extends Component
{

    public function redirectToSync() {
        // Redirect to settings page with 'Sync' tab selected
        session()->flash('settingsCurrentTab', 'Sync');
        $this->redirect("/settings", navigate: true);

    }

    public function render()
    {
        return view('livewire.mygames');
    }
}
