<?php

namespace App\Http\Controllers;

use Exception;
use App\Model\Point;
use Illuminate\Http\Request;

class PointController extends Controller
{

    /**
     * Get  team points
     * 
     * @return type
     */
    public function getTeamPoints()
    {
        try {
            $pointTable = $this->pointTable();
            return view('pages.point', ['points' => $pointTable]);
        } catch (Exception $e) {
            return back()->withError($e->getMessage() . $e->getFile() . $e->getLine());
        }
    }

    /**
     * Get point table
     * 
     * @return mixed
     */
    protected function pointTable()
    {
        $pointTable = Point::all()->sortByDesc('points');
        return $pointTable ?? "";
    }

}
