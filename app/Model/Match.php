<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    /**
     * table name
     * @var string
     */
    protected $table = 'matches';

    /**
     * fillable array
     * @var array
     */
    protected $fillable = [
        'team_a',
        'team_b',
        'winner',
        'match_date',
    ];

   /**
    * Get team A details
    * 
    * @return mixed
    */
    public function teamADetails(){
       return $this->hasOne('App\Model\Team','id','team_a');
    }

    /**
     * Get team B details
     * 
     * @return mixed
     */
    public function teamBDetails(){
       return $this->hasOne('App\Model\Team','id','team_b');
    }

    /**
     * Get winner team details
     * 
     * @return mixed
     */
    public function winnerTeam(){
       return $this->hasOne('App\Model\Team','id','winner');
    }
}
