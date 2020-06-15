<?php

namespace App\Http\Controllers;

use Exceptions;
use App\Model\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{

    /**
     * Get team data
     * 
     * @return mixed
     */
    public function getAllTeam()
    {
        try {
            $teams = $this->teamList();
            return view('pages.team', ['teams' => $teams]);
        } catch (Exception $e) {
            return back()->withError($e->getMessage() . $e->getFile() . $e->getLine());
        }
    }

    /**
     * Get team list
     * 
     * @return mixed
     */
    protected function teamList()
    {
        $team = Team::all();
        return $team ?? "";
    }

}
