<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeamsController extends Controller
{
    public function index()
    {
    	//$teams = Team::all();
    	$teams = DB::table('Teams')->get();
        return view('teams.index', ['teams' => $teams]);
    }
 }
