<?php

namespace App\Http\Controllers;

use Exception;
use App\Model\Match;
use Illuminate\Http\Request;

class MatchController extends Controller
{

    /**
     * Get all matches
     * 
     * @return  mixed
     */
    public function getAllMatches()
    {
        try {
            $matches = $this->matchList();
            return view('pages.match', ['matches' => $matches]);
        } catch (Exception $e) {
            return back()->withError($e->getMessage() . $e->getFile() . $e->getLine());
        }
    }

    /**
     * Get match list
     * 
     * @return mixed
     */
    protected function matchList()
    {
        $matches = Match::all();
        return $matches ?? "";
    }

}
