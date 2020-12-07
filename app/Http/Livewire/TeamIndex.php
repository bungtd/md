<?php

namespace App\Http\Livewire;

use App\Models\TeamEvent;
use Livewire\Component;

class TeamIndex extends Component
{
    public $nama_team;
    public $logo_team;
    public $tanggal_add;


    // Captain
    public $playerName1;
    public $playerNick1;
    public $playerGameID1;
    public $playerStatus1;
    // Player #2
    public $playerName2;
    public $playerNick2;
    public $playerGameID2;
    public $playerStatus2;
    // Player #3
    public $playerName3;
    public $playerNick3;
    public $playerGameID3;
    public $playerStatus3;
    // Player #4
    public $playerName4;
    public $playerNick4;
    public $playerGameID4;
    public $playerStatus4;
    // Player #5
    public $playerName5;
    public $playerNick5;
    public $playerGameID5;
    public $playerStatus5;


    public function mount($id){
        $this->team($id);
        $players1 = TeamEvent::find($id)->players->where('status', 'Player 1');

        $this->playersSatu($id);
        $this->playersDua($id);
        $this->playersTiga($id);
        $this->playersEmpat($id);
        $this->playersLima($id);

    }
    public function team($id){
        $teams = TeamEvent::find($id);
        if($teams){
            $this->nama_team = $teams->nama_team;
            $this->logo_team = $teams->logo_team;
            $this->tanggal_add = $teams->created_at;
        }
    }
    public function playersSatu($id){
        $players = TeamEvent::find($id)->players->where('status', 'Player 1');
        if(!empty($players[0]['nama_lengkap'])){
            $this->playerName1 = $players['0']['nama_lengkap'];
            $this->playerNick1 = $players['0']['nick_ingame'];
            $this->playerGameID1 = $players['0']['id_ingame'];
            $this->playerStatus1 = $players['0']['status'];
        } elseif ($players == []) {

        }
    }
    public function playersDua($id){
        $players = TeamEvent::find($id)->players->where('status', 'Player 2');
        if(!empty($players[0]['nama_lengkap'])){
            $this->playerName2 = $players['0']['nama_lengkap'];
            $this->playerNick2 = $players['0']['nick_ingame'];
            $this->playerGameID2 = $players['0']['id_ingame'];
            $this->playerStatus2 = $players['0']['status'];
        }
    }
    public function playersTiga($id){
        $players = TeamEvent::find($id)->players->where('status', 'Player 3');
        if(!empty($players[0]['nama_lengkap'])){
            $this->playerName3 = $players['0']['nama_lengkap'];
            $this->playerNick3 = $players['0']['nick_ingame'];
            $this->playerGameID3 = $players['0']['id_ingame'];
            $this->playerStatus3 = $players['0']['status'];
        }
    }
    public function playersEmpat($id){
        $players = TeamEvent::find($id)->players->where('status', 'Player 4');
        if(!empty($players[0]['nama_lengkap'])){
            $this->playerName4 = $players['0']['nama_lengkap'];
            $this->playerNick4 = $players['0']['nick_ingame'];
            $this->playerGameID4 = $players['0']['id_ingame'];
            $this->playerStatus4 = $players['0']['status'];
        }
    }
    public function playersLima($id){
        $players = TeamEvent::find($id)->players->where('status', 'Player 5');
        if(!empty($players[0]['nama_lengkap'])){
            $this->playerName5 = $players['0']['nama_lengkap'];
            $this->playerNick5 = $players['0']['nick_ingame'];
            $this->playerGameID5 = $players['0']['id_ingame'];
            $this->playerStatus5 = $players['0']['status'];
        }
    }
    public function render()
    {
        return view('livewire.team-index');
    }
}
