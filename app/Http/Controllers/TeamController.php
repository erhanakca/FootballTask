<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        {
            try {
                $teams = Team::all();
            }catch (\Exception $e){
                return response(['success' => false, 'error' => $e->getMessage()]);
            }
            return view('footballTask', ['teams' => $teams]);
        }
    }
}
