<?php

namespace App\Http\Livewire;

use App\Models\Player;
use App\Models\TeamEvent;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class PlayerIndex extends Component
{
    public $teameID;
    public $playerID;
    public function delete(){
        $team_event = TeamEvent::where('user_id', Auth::id())->get();

        foreach($team_event as $teamE){
            $this->teameID = $teamE->id;
        }
        $players = TeamEvent::find($this->teameID)->players;
        foreach($players as $player){
            $this->playerID = $player->id;
        }

        Player::destroy($this->playerID);
    }
    public function render()
    {
        $team_event = TeamEvent::where('user_id', Auth::id())->get();

        foreach($team_event as $teamE){
            $this->teameID = $teamE->id;
        }
        $players = Player::where('teamevent_id', $this->teameID)->orderBy('status', 'ASC')->get();
        return view('livewire.player-index', compact('players'));
    }
}
