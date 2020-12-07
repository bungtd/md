<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamEvent extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function user(){
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
    public function players(){
        return $this->hasMany('App\Models\Player', 'teamevent_id', 'id');
    }
}
