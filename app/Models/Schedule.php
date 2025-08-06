<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    //
    protected $fillable = ['match_id','scheduled_at'];

    public function Game() {
        return $this->belongsTo(Game::class);
    }
}
