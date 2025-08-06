<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    //
    protected $fillable = ['name', 'logo_url'];

    public function players() {
        return $this->hasMany(Player::class);
    }

    public function homeGames() {
        return $this->hasMany(Game::class, 'home_team_id');
    }

    public function awayGames() {
        return $this->hasMany(Game::class, 'away_team_id');
    }

    public function standing() {
        return $this->hasOne(Standing::class);
    }

    public function images() {
        return $this->morphMany(Image::class, 'entity', null, null, 'entity_id');
    }
}
