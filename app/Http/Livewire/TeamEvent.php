<?php

namespace App\Http\Livewire;

use App\Models\TeamEvent as ModelsTeamEvent;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class TeamEvent extends Component
{
    public function render()
    {
        $userId = Auth::id();
        $teamevents=ModelsTeamEvent::where('user_id', $userId)->get();

        return view('livewire.team-event', compact('teamevents'));
    }
}
