<?php

namespace App\Http\Controllers;

use App\Models\Tournament;
use Illuminate\Http\Request;

class TournamentController extends Controller
{
    public function viewTournament()
    {
        $activeTournament = Tournament::where('is_active', true)->first();
//        dd($activeTournament);
        return view('tournament',['activeTournament' => $activeTournament]);
    }
}
