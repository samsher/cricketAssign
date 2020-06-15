<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{

    /**
     * table name
     * @var string
     */
    protected $table = 'players';

    /**
     * fillable fields
     * @var array
     */
    protected $fillable = [
        'team_id',
        'first_name',
        'last_name',
        'image_uri',
        'player_jersey_no',
        'country',
        'matches',
        'runs',
        'highest_score',
        'fifties',
        'hundreds',
    ];

    /**
     * combine first and last name
     * @return string
     */
    public function getNameAttribute()
    {
        return ucwords($this->firstName . ' ' . $this->lastName);
    }

}
