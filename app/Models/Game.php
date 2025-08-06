<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    //
    protected $table = 'games';         // la tabla que usamos
    protected $fillable = [
        'home_team_id',
        'away_team_id',
        'scheduled_at',
        'result',
    ];

    public function homeTeam() {
        return $this->belongsTo(Team::class, 'home_team_id');
    }

    public function awayTeam() {
        return $this->belongsTo(Team::class, 'away_team_id');
    }

    public function goals() {
        return $this->hasMany(Goal::class);
    }
}
