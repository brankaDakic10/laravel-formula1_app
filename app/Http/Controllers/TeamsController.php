<?php

namespace App\Http\Controllers;
use App\Team;
use Illuminate\Http\Request;

class TeamsController extends Controller
{
    public function index()
    {
        $teams=Team::all();
         return view('teams.teams-index',compact('teams'));
    }
}
