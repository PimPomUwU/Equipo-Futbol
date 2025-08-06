<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    //
        protected $fillable = ['name', 'number', 'team_id'];

    public function team() {
        return $this->belongsTo(Team::class);
    }

    public function goals() {
        return $this->hasMany(Goal::class);
    }

    public function statistics() {
        return $this->hasOne(PlayerStatistic::class, 'player_id');
    }

}