<?php

namespace App\Http\Controllers;

use App\Models\HomeSettings;
use App\Models\Tournament;

class HomeController extends Controller
{
    public function index()
    {
        $homeSettings = HomeSettings::first();
        return view('welcome',['homeSettings' => $homeSettings]);
    }



    public function viewForm()
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }
        $formVariables = [
            'player_count'=> 1,
            'substitute_player_count'=> 0,
        ];
        $tournament = Tournament::where('is_active', true)->first();
        if(!$tournament){
            return view('no-active-tournament');
        }
        if ($tournament->type === 'CS_Solo' || $tournament->type === 'FM_Solo') {
            $formVariables['player_count'] = 1;

        } elseif ($tournament->type === 'CS_Duo' || $tournament->type === 'FM_Duo') {
            $formVariables['player_count'] = 2;
            $formVariables['substitute_player_count'] = 1;
        } elseif ($tournament->type === 'CS_Squad' || $tournament->type === 'FM_Squad') {
            $formVariables['player_count'] = 4;
            $formVariables['substitute_player_count'] = 2;
        }

        return view('example-form',['formVariables' => $formVariables,'tournament' => $tournament]);
    }

    public function viewStats()
    {
        return view('stats',['tournaments' => Tournament::all()]);
    }




}
