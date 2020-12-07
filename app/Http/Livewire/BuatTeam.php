<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\TeamEvent;
use Illuminate\Support\Facades\Auth;

class BuatTeam extends Component
{

    use WithFileUploads;

    public $logo;
    public $nama_team;
    public $role_team;
    public $contact_team;

    public function save()
    {
        $this->validate([
        'logo' => 'image|max:10000',
        'nama_team' => 'required',
        'role_team' => 'required',
        'contact_team' => 'required|max:13'
        ]);

        $logoname = md5($this->logo . microtime()).'.'.$this->logo->extension();


        $this->logo->storeAs('logo', $logoname);

        TeamEvent::create([
            'logo_team' => $logoname,
            'nama_team' => $this->nama_team,
            'role_team' => $this->role_team,
            'contact_team' => $this->contact_team,
            'user_id' => Auth::id()
            ]);


        return $this->redirectRoute('daftar-event');
    }

    public function render()
    {

            return view('livewire.buat-team');
    }
}
