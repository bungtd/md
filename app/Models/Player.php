<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;
    public $guarded=[];
    public function teamevent(){
        return $this->belongsTo('App\Models\TeamEvent', 'teamevent_id', 'id');
    }

    public function verify(){
        return $this->hasOne('App\Models\VerifyTeam', 'player_id', 'id');
    }
}
