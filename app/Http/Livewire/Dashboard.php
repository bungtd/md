<?php

namespace App\Http\Livewire;

use App\Models\Player;
use App\Models\VerifyTeam;
use Livewire\Component;

class Dashboard extends Component
{
    // public VerifyTeam $verifyTeam;
    // public $players;

    // public function mount(){
    //     $this->verifyTeam = VerifyTeam::all();
    // }

    public function render()
    {
        return view('livewire.dashboard', [
            'verifyTeam' => VerifyTeam::all(),
        ]);
    }
}
