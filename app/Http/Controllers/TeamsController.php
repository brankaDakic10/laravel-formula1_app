<?php

namespace App\Http\Controllers;
use App\Team;
use Illuminate\Http\Request;

class TeamsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $teams=Team::all();
         return view('teams.teams-index',compact('teams'));
    }
    public function show($id)
    {
        $team=Team::find($id);
        return view('teams.teams-show',compact('team'));
    }
 
}
