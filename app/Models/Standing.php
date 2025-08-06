<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Standing extends Model
{
    //
    public $incrementing = false;
    protected $primaryKey = 'team_id';
    protected $fillable = [
        'team_id','points','played','wins','draws','losses',
        'goals_for','goals_against','goal_difference'
    ];

    public function team() {
        return $this->belongsTo(Team::class);
    }
}
