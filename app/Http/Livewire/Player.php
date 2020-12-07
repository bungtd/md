<?php

namespace App\Http\Livewire;

use App\Models\Player as ModelsPlayer;
use App\Models\TeamEvent;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Player extends Component
{
    public $teamevent_id;
    public $nama_lengkap;
    public $nick_ingame;
    public $id_ingame;
    public $contact_player;
    public $status;

    public function save(){

        $this->validate([
            'teamevent_id' => 'required',
            'nama_lengkap' => 'required',
            'nick_ingame' => 'required',
            'id_ingame' => 'required',
            'contact_player' => 'max:13',
            'status' => 'required'
            ]);


            ModelsPlayer::create([
                'teamevent_id' => $this->teamevent_id,
                'nama_lengkap' => $this->nama_lengkap,
                'nick_ingame' => $this->nick_ingame,
                'id_ingame' => $this->id_ingame,
                'contact_player' => $this->contact_player,
                'status' => $this->status
            ]);


            return $this->redirectRoute('daftar-event');
    }
    public function render()
    {
        $teamevents = TeamEvent::where('user_id', Auth::id())->get();
        return view('livewire.player', compact('teamevents'));
    }
}
