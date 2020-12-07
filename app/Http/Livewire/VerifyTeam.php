<?php

namespace App\Http\Livewire;

use App\Models\TeamEvent;
use App\Models\VerifyTeam as ModelsVerifyTeam;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class VerifyTeam extends Component
{
    use WithFileUploads;
    public $ss_instagram;
    public $ss_youtube;
    public $foto_selfie;
    public $foto_ktp;
    public $player_id;

    public $teamevents;
    public $players;
    public $teamID;

    public function save(){

    $this->validate([
        'player_id' => 'required',
        'ss_instagram' => 'required',
        'ss_youtube' => 'required',
        'foto_selfie' => 'required',
        'foto_ktp' => 'image|max:10000'
        ]);

    $fotoKTP = md5($this->foto_ktp . microtime()).'.'.$this->foto_ktp->extension();
    $fotoSelfie = md5($this->foto_selfie . microtime()).'.'.$this->foto_selfie->extension();
    $ssYT = md5($this->ss_youtube . microtime()).'.'.$this->ss_youtube->extension();
    $ssIG = md5($this->ss_instagram . microtime()).'.'.$this->ss_instagram->extension();


    $this->foto_ktp->storeAs('verify', $fotoKTP);
    $this->foto_selfie->storeAs('verify', $fotoSelfie);
    $this->ss_youtube->storeAs('verify', $ssYT);
    $this->ss_instagram->storeAs('verify', $ssIG);

    ModelsVerifyTeam::create([
        'player_id' => $this->player_id,
        'ss_instagram' => $ssIG,
        'ss_youtube' => $ssYT,
        'foto_selfie' => $fotoSelfie,
        'foto_ktp' => $fotoKTP
        ]);

    return $this->redirectRoute('daftar-event');
    }

    public function render()
    {
        $this->teamevents = TeamEvent::where('user_id', Auth::id())->get();
        if($this->teamID){
            $this->players = $this->teamevents->find($this->teamID)->players;
        }
        return view('livewire.verify-team');
    }
}
