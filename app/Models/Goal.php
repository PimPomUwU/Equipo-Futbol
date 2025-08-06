<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    //
    protected $fillable = ['player_id', 'match_id', 'minute'];

    public function player() {
        return $this->belongsTo(Player::class);
    }

    public function Game() {
        return $this->belongsTo(Game::class);
    }
}
