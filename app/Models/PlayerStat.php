<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlayerStat extends Model
{
    //
    protected $primaryKey = 'player_id';
    public $incrementing = false;
    protected $fillable = ['player_id','goals','assists','yellow_cards','red_cards'];

    public function player() {
        return $this->belongsTo(Player::class);
    }

}
