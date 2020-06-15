<?php

namespace App\Http\Controllers;

use Exception;
use App\Model\Team;
use Illuminate\Http\Request;

class PlayerController extends Controller
{

    /**
     * Get team player by team id
     * 
     * @param $id
     * @return  mixed
     */
    public function getPlayers($id)
    {
        try {
            $id = (int) base64_decode($id);
            if (empty($id)) {
                abort(400);
            }
            $players = $this->playerList($id);
            return view('pages.player', ['team' => $players]);
        } catch (Exception $e) {
            return back()->withError($e->getMessage() . $e->getFile() . $e->getLine());
        }
    }

    /**
     * Get player list with team
     * 
     * @param $id
     * @return string
     */
    protected function playerList($id)
    {
        $players = Team::where('id', $id)->first();
        return $players ?? '';
    }

}
